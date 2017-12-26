<?php

/**
 * sfGuardFormSignin for sfGuardAuth signin action
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardFormSignin.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardFormSignin extends BasesfGuardFormSignin
{
  /**
   * @see sfForm
   */
  public function configure()
  {
    //modifico la forma en la que se visualizara y seteo sus validaciones por otras mas descriptivas
    /*$this->form = new sfForm();
    $this->form->setWidgets(array(
      'username'  => new sfWidgetFormInput(array()),
      'password'   => new sfWidgetFormInputPassword(array('type' => 'password')),
      'remember'   => new sfWidgetFormInputCheckbox(array()),
      '_csrf_token'   => new sfWidgetFormInputHidden(array()),
    ));
    /*
    $widgetUsername = new sfWidgetFormInputText(array(), array('class' => 'form-control'));
    $widgetPassword = new sfWidgetFormInputPassword(array(), array('class' => 'form-control'));
    $widgetRemember = new sfWidgetFormInputCheckbox(array(), array('class' => 'form-control'));
    $widgetCSRF_TOKEN = new sfWidgetFormInputHidden(array());
    */
      
    /*$this->setValidators(array(
      'username'  => new sfValidatorString(array(), array('required'=>'El email es obligatorio')),
      'password'   => new sfValidatorString(array(), array('required'=>'La contraseña es obligatoria')),
      //'remember'   => new sfValidatorBoolean(),
    ));*/
      
    /*$this->widgetSchema->setLabels(array(
      'remember'   => 'Recordarme '
    ));*/
    
  }
}
