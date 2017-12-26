<?php

/**
 * Botones form.
 *
 * @package    portal-educacion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BotonesForm extends BaseBotonesForm
{
  public function configure()
  {
  	 //seteo los labels por un nombre mas legible en los form
    /*$this->widgetSchema->setLabels(array(
        'btn_nombre'=>'Nombre',
        'btn_link'=>'Link',
        //'btn_imagen'=>'Imagen',
        'btn_activo'=>'Activo',
        'btn_cat_id'=>'Categoria',
    ));*/
    
    //seteo los mensajes de error por default(solo 'required') del form de alta y editar
    $this->setValidators(array(
        //con required false, ocultamos el mensaje por default, no se muestran en la vista
        'id' => new sfValidatorInteger(array('required' => false)),
        //personalizamnos los mensajes de error para todos estos campos del form de alta de botones
        'btn_nombre' => new sfValidatorString(array(), array('required' => 'El Nombre es obligatorio')),
        'btn_link' => new sfValidatorString(array(), array('required' => 'La URL es obligatorio')),
        //'btn_imagen' => new sfValidatorFile(),
        'btn_imagen' => new sfValidatorString(array(), array('required' => 'El Icono es obligatorio')),
        'btn_bg' => new sfValidatorString(array(), array('required' => 'El Color de Fondo para tu Icono es obligatorio')),
        'btn_activo' => new sfValidatorInteger(array(), array('required' => "El campo Activo es obligatorio, ingresa '1' para activarlo o '0' para desactivarlo")),
        'btn_cat_id' => new sfValidatorInteger(array(), array('required' => false)),
    ));
        
    //cambiamos el input text q lo crea por default el generador para el campo imagen, por un input file
    /*
    $this->setWidget('btn_imagen', new sfWidgetFormInputFileEditable(array(
      'file_src'    => '/uploads/images/'.$this->getObject()->getBtnImagen(),
      'edit_mode'   => !$this->isNew() && $this->getObject()->getBtnImagen(),
      'is_image'    => true,
      //este em muestra un checkbox con la opcion de tildar para eliminar la imagen, pero antes debe tener un campo en la DB btn_imagen_delete segun sea su campo
      'with_delete' => false
    )));
    */
    
    //este nos sube la imagen al directorio especificado en path
    /*
    $this->setValidator('btn_imagen', new sfValidatorFile(array(
      'mime_types' => 'web_images',
      'path' => sfConfig::get('sf_upload_dir').'/images',
      'required' => false
    )));
    */
    
    //este campo lo hago de forma unica pq no me cambia el nombre si esta arriba de los sets para el camo file
    //$this->widgetSchema->setLabels(array('btn_imagen'=> 'Imagen'));
  }
}
