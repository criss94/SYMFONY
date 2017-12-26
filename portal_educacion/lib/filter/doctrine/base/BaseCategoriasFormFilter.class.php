<?php

/**
 * Categorias filter form base class.
 *
 * @package    portal-educacion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCategoriasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cat_nombre'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cat_posicion'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sf_guard_group_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardGroup')),
    ));

    $this->setValidators(array(
      'cat_nombre'          => new sfValidatorPass(array('required' => false)),
      'cat_posicion'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sf_guard_group_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardGroup', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('categorias_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addSfGuardGroupListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.RolesCategorias RolesCategorias')
      ->andWhereIn('RolesCategorias.rol_group_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Categorias';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'cat_nombre'          => 'Text',
      'cat_posicion'        => 'Number',
      'sf_guard_group_list' => 'ManyKey',
    );
  }
}
