<?php

/**
 * Botones filter form base class.
 *
 * @package    portal-educacion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseBotonesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'btn_nombre' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'btn_link'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'btn_imagen' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'btn_bg'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'btn_activo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'btn_cat_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categorias'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'btn_nombre' => new sfValidatorPass(array('required' => false)),
      'btn_link'   => new sfValidatorPass(array('required' => false)),
      'btn_imagen' => new sfValidatorPass(array('required' => false)),
      'btn_bg'     => new sfValidatorPass(array('required' => false)),
      'btn_activo' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'btn_cat_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Categorias'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('botones_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Botones';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'btn_nombre' => 'Text',
      'btn_link'   => 'Text',
      'btn_imagen' => 'Text',
      'btn_bg'     => 'Text',
      'btn_activo' => 'Number',
      'btn_cat_id' => 'ForeignKey',
    );
  }
}
