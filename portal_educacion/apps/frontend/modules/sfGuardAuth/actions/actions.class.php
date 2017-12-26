<?php

/**
 * sfGuardAuth actions.
 *
 * @package    portal-educacion
 * @subpackage sfGuardAuth
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
require_once(sfConfig::get('sf_plugins_dir').'/sfDoctrineGuardPlugin/modules/sfGuardAuth/lib/BasesfGuardAuthActions.class.php');

include("/lib/google-login-api/autoload.php");
include("/lib/google_auth.class.php");

class sfGuardAuthActions extends BasesfGuardAuthActions
{

	public function executeSignin($request){
		//mando una variable booleana para verificar si muestro o no el form de login
		//$this->hideFormLogin = sfConfig::get('app_ocultar_form_login');
		//busco el campo activo en la db para mostrar el login basico o login con google para iniciar sesion
		$this->hideFormLogin = Doctrine_Core::getTable('TipoDeLogin')->find(1);

		//si esta logueado lo redirigimos al home
	    $user = $this->getUser();
	    if ($user->isAuthenticated()){
	      	return $this->redirect('@homepage');
	    }

	    //desde aqui inicia nuestro codigo para el login con la api de google//////////////////////////////////////////////////////////////////////
	    //instanciamos la clase de google y nuestra clase propia para acceder a nuestros metodos
	    $client = new Google_Client();
  		$auth = new GoogleAuth($client);
	    
	    //este es un metodo nuestro que nos devuelve true si todo esta correcto
	    if ($auth->checkRedirectCode()){
			//obtengo el email del usuario logueado desde la api de google
	    	$payload = $auth->getPayload();
  			$email_google = $payload['payload']['email'];
  			//echo 'Email de la Api de google: '.$email_google.'<br>';

  			//verifico si existe el email obtenido de google con uno de la DB para que este pueda iniciar session eh ingresar al panel
			$user = Doctrine_Core::getTable('sfGuardUser')
				->createQuery()
				->where('email_address = ?', $email_google)
				->fetchOne();

			if ($user) {
				//echo "existe usuario";
				$this->getUser()->signin($user);
				$signinUrl = sfConfig::get('app_sf_guard_plugin_success_signin_url', $this->getUser()->getReferer($request->getReferer()));
				return $this->redirect('' != $signinUrl ? $signinUrl : '@homepage');
			}else{
				$this->getUser()->setFlash('error', sprintf('Tu cuenta de google no se encuentra registrado en nuestro sistema, comuniquese con el administrador'));
        		$this->redirect('/');
			}

		}
		//fin de nuestro codigo//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		//este es el codigo original del login ed symfony
		$class = sfConfig::get('app_sf_guard_plugin_signin_form', 'sfGuardFormSignin'); 
	    $this->form = new $class();

	    if ($request->isMethod('post')){
			$this->form->bind($request->getParameter('signin'));
			if ($this->form->isValid()){
				$values = $this->form->getValues(); 
				$this->getUser()->signin($values['user'], array_key_exists('remember', $values) ? $values['remember'] : false);

				// always redirect to a URL set in app.yml
				// or to the referer
				// or to the homepage
				$signinUrl = sfConfig::get('app_sf_guard_plugin_success_signin_url', $user->getReferer($request->getReferer()));
				return $this->redirect('' != $signinUrl ? $signinUrl : '@homepage');
			}

	    }else{
			if ($request->isXmlHttpRequest()){
				$this->getResponse()->setHeaderOnly(true);
				$this->getResponse()->setStatusCode(401);

				return sfView::NONE;
			}

			// if we have been forwarded, then the referer is the current URL
			// if not, this is the referer of the current request
			$user->setReferer($this->getContext()->getActionStack()->getSize() > 1 ? $request->getUri() : $request->getReferer());

			$module = sfConfig::get('sf_login_module');
			if ($this->getModuleName() != $module){
				return $this->redirect($module.'/'.sfConfig::get('sf_login_action'));
			}

			$this->getResponse()->setStatusCode(401);
	    }
  	}

}