<?php

/**
 * Servicios form base class.
 *
 * @method Servicios getObject() Returns the current form's model object
 *
 * @package    portal-educacion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseServiciosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'ser_icono'  => new sfWidgetFormInputText(),
      'ser_link'   => new sfWidgetFormInputText(),
      'ser_nombre' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'ser_icono'  => new sfValidatorString(array('max_length' => 255)),
      'ser_link'   => new sfValidatorString(array('max_length' => 255)),
      'ser_nombre' => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('servicios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Servicios';
  }

}
