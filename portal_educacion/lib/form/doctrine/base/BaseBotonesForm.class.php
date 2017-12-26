<?php

/**
 * Botones form base class.
 *
 * @method Botones getObject() Returns the current form's model object
 *
 * @package    portal-educacion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBotonesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'btn_nombre' => new sfWidgetFormInputText(),
      'btn_link'   => new sfWidgetFormInputText(),
      'btn_imagen' => new sfWidgetFormInputText(),
      'btn_bg'     => new sfWidgetFormInputText(),
      'btn_activo' => new sfWidgetFormInputText(),
      'btn_cat_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categorias'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'btn_nombre' => new sfValidatorString(array('max_length' => 255)),
      'btn_link'   => new sfValidatorString(array('max_length' => 255)),
      'btn_imagen' => new sfValidatorString(array('max_length' => 255)),
      'btn_bg'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'btn_activo' => new sfValidatorInteger(),
      'btn_cat_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Categorias'))),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Botones', 'column' => array('btn_nombre')))
    );

    $this->widgetSchema->setNameFormat('botones[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Botones';
  }

}
