<?php

/**
 * RolesCategorias form base class.
 *
 * @method RolesCategorias getObject() Returns the current form's model object
 *
 * @package    portal-educacion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRolesCategoriasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'rol_cat_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categorias'), 'add_empty' => true)),
      'rol_group_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardGroup'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'rol_cat_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Categorias'), 'required' => false)),
      'rol_group_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardGroup'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('roles_categorias[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RolesCategorias';
  }

}
