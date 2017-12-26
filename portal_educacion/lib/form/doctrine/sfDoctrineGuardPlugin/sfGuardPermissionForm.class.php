<?php

/**
 * sfGuardPermission form.
 *
 * @package    portal-educacion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardPermissionForm extends PluginsfGuardPermissionForm
{
  public function configure()
  {
  	$this->setValidators(array(
        'id' => new sfValidatorInteger(array('required' => false)),
        'name' => new sfValidatorString(array(), array('required' => 'El Nombre es obligatorio')),
        'description' => new sfValidatorString(array(), array('required' => 'La descripción es obligatorio')),
        'groups_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardGroup', 'required' => false)),
        'users_list'  => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser', 'required' => false)),
        //'created_at' => new sfValidatorDateTime(array('required'=>false)),
        //'updated_at' => new sfValidatorDateTime(),
    ));
  }
}
