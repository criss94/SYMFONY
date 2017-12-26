<?php

/**
 * RolesCategorias filter form base class.
 *
 * @package    portal-educacion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRolesCategoriasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'rol_cat_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categorias'), 'add_empty' => true)),
      'rol_group_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardGroup'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'rol_cat_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Categorias'), 'column' => 'id')),
      'rol_group_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardGroup'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('roles_categorias_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RolesCategorias';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'rol_cat_id'   => 'ForeignKey',
      'rol_group_id' => 'ForeignKey',
    );
  }
}
