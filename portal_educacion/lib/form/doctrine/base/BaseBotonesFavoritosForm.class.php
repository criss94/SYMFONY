<?php

/**
 * BotonesFavoritos form base class.
 *
 * @method BotonesFavoritos getObject() Returns the current form's model object
 *
 * @package    portal-educacion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBotonesFavoritosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'bf_user_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'bf_btn_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Botones'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'bf_user_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'bf_btn_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Botones'))),
    ));

    $this->widgetSchema->setNameFormat('botones_favoritos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BotonesFavoritos';
  }

}
