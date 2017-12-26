<?php

/**
 * Categorias form base class.
 *
 * @method Categorias getObject() Returns the current form's model object
 *
 * @package    portal-educacion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCategoriasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'cat_nombre'          => new sfWidgetFormInputText(),
      'cat_posicion'        => new sfWidgetFormInputText(),
      'sf_guard_group_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardGroup')),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'cat_nombre'          => new sfValidatorString(array('max_length' => 255)),
      'cat_posicion'        => new sfValidatorInteger(),
      'sf_guard_group_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardGroup', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Categorias', 'column' => array('cat_nombre')))
    );

    $this->widgetSchema->setNameFormat('categorias[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Categorias';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['sf_guard_group_list']))
    {
      $this->setDefault('sf_guard_group_list', $this->object->sfGuardGroup->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->savesfGuardGroupList($con);

    parent::doSave($con);
  }

  public function savesfGuardGroupList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['sf_guard_group_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->sfGuardGroup->getPrimaryKeys();
    $values = $this->getValue('sf_guard_group_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('sfGuardGroup', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('sfGuardGroup', array_values($link));
    }
  }

}
