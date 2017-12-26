<?php

/**
 * sfGuardUser form.
 *
 * @package    portal-educacion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardUserForm extends PluginsfGuardUserForm
{
  public function configure()
  {

  	$this->setValidators(array(
        'id' => new sfValidatorInteger(array('required' => false)),
        'first_name' => new sfValidatorString(array(), array('required' => 'El Nombre es obligatorio')),
        'last_name' => new sfValidatorString(array(), array('required' => 'El Apellido es obligatorio')),
        'email_address' => new sfValidatorString(array(), array('required' => 'El Email es obligatorio')),
        'username' => new sfValidatorString(array(), array('required' => 'El Usuario es obligatorio')),
        'password' => new sfValidatorString(array(), array('required' => 'La Contraseña es obligatorio')),
        'is_active' => new sfValidatorBoolean(array('required' => false)),
        //'is_super_admin' => new sfValidatorBoolean(array('required' => false)),
        //'last_login' => new sfValidatorString(array(), array('required' => '')),
        'created_at' => new sfValidatorDateTime(),
        'updated_at' => new sfValidatorDateTime(),
        'groups_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardGroup', 'required' => false)),
        'permissions_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardPermission', 'required' => false)),
    ));
  }
}
