<?php

/**
 * BotonesFavoritos filter form base class.
 *
 * @package    portal-educacion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseBotonesFavoritosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'bf_user_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'bf_btn_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Botones'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'bf_user_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'bf_btn_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Botones'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('botones_favoritos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BotonesFavoritos';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'bf_user_id' => 'ForeignKey',
      'bf_btn_id'  => 'ForeignKey',
    );
  }
}
