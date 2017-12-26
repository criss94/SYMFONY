<?php

/**
 * BaseNoticias
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $not_nombre
 * @property string $not_link
 * @property string $not_imagen
 * @property integer $not_activo
 * @property timestamp $not_inicio_pub
 * @property timestamp $not_fin_pub
 * 
 * @method string    getNotNombre()      Returns the current record's "not_nombre" value
 * @method string    getNotLink()        Returns the current record's "not_link" value
 * @method string    getNotImagen()      Returns the current record's "not_imagen" value
 * @method integer   getNotActivo()      Returns the current record's "not_activo" value
 * @method timestamp getNotInicioPub()   Returns the current record's "not_inicio_pub" value
 * @method timestamp getNotFinPub()      Returns the current record's "not_fin_pub" value
 * @method Noticias  setNotNombre()      Sets the current record's "not_nombre" value
 * @method Noticias  setNotLink()        Sets the current record's "not_link" value
 * @method Noticias  setNotImagen()      Sets the current record's "not_imagen" value
 * @method Noticias  setNotActivo()      Sets the current record's "not_activo" value
 * @method Noticias  setNotInicioPub()   Sets the current record's "not_inicio_pub" value
 * @method Noticias  setNotFinPub()      Sets the current record's "not_fin_pub" value
 * 
 * @package    portal-educacion
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNoticias extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('noticias');
        $this->hasColumn('not_nombre', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('not_link', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('not_imagen', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'default' => 'sin-foto.jpg',
             'length' => 255,
             ));
        $this->hasColumn('not_activo', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('not_inicio_pub', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('not_fin_pub', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}