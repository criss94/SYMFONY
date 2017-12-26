<?php

/**
 * Servicios filter form base class.
 *
 * @package    portal-educacion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseServiciosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ser_icono'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ser_link'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ser_nombre' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'ser_icono'  => new sfValidatorPass(array('required' => false)),
      'ser_link'   => new sfValidatorPass(array('required' => false)),
      'ser_nombre' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('servicios_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Servicios';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'ser_icono'  => 'Text',
      'ser_link'   => 'Text',
      'ser_nombre' => 'Text',
    );
  }
}
