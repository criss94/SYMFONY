<?php

/**
 * Servicios form.
 *
 * @package    portal-educacion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ServiciosForm extends BaseServiciosForm
{
  public function configure()
  {
  	$this->setValidators(array(
        //con required false, ocultamos el mensaje por default, no se muestran en la vista
        'id' => new sfValidatorInteger(array('required' => false)),
        //personalizamnos los mensajes de error para todos estos campos del form de alta de botones
        'ser_icono' => new sfValidatorString(array(), array('required' => 'El Icono es obligatorio')),
        'ser_link' => new sfValidatorString(array(), array('required' => 'La URL del servicio es obligatorio')),
        'ser_nombre' => new sfValidatorString(array(), array('required' => 'El Nombre del servicio es obligatorio')),
    ));
  }
}
