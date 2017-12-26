<?php

require_once dirname(__FILE__).'/../lib/sf_guard_userGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/sf_guard_userGeneratorHelper.class.php';

/**
 * sf_guard_user actions.
 *
 * @package    portal-educacion
 * @subpackage sf_guard_user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sf_guard_userActions extends autoSf_guard_userActions
{

	public function executeIndex(sfWebRequest $request){
		// sorting
		if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort'))){
		  $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
		}

		// pager
		if ($request->getParameter('page')){
		  $this->setPage($request->getParameter('page'));
		}

		$this->pager = $this->getPager();
		$this->sort = $this->getSort();

		//obtengo el campo booleano de la DB para mostra u ocultar el form basico por el de google
		$this->login_activo = Doctrine_Core::getTable('TipoDeLogin')->find(1);

	}

	//este metodo me cambia el tipo de inicio de sesion que es llamado desde el admin de usuarios y dependiendo de si su campo es true o false 
	//mostrara diferente login a los usuarios
	public function executeChangeLogin(sfWebRequest $request){
		$q = Doctrine_Query::create()
                    ->update('TipoDeLogin')
                    ->set('activo', '?', $request->getParameter('tipo_de_login'))
                    ->where('id = ?', '1')
                    ->execute();

        //mensaje que se notificara al usuario al modificar el inicio de sesion
     	$this->getUser()->setFlash('notice', sprintf('El tipo de inicio de sesión se ha modificado con exito'));
		$this->redirect('@sf_guard_user');
	}

}
