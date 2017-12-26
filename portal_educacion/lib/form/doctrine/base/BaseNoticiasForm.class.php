<?php

/**
 * Noticias form base class.
 *
 * @method Noticias getObject() Returns the current form's model object
 *
 * @package    portal-educacion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNoticiasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'not_nombre'     => new sfWidgetFormInputText(),
      'not_link'       => new sfWidgetFormInputText(),
      'not_imagen'     => new sfWidgetFormInputText(),
      'not_activo'     => new sfWidgetFormInputText(),
      'not_inicio_pub' => new sfWidgetFormDateTime(),
      'not_fin_pub'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'not_nombre'     => new sfValidatorString(array('max_length' => 255)),
      'not_link'       => new sfValidatorString(array('max_length' => 255)),
      'not_imagen'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'not_activo'     => new sfValidatorInteger(),
      'not_inicio_pub' => new sfValidatorDateTime(),
      'not_fin_pub'    => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Noticias', 'column' => array('not_nombre')))
    );

    $this->widgetSchema->setNameFormat('noticias[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Noticias';
  }

}
