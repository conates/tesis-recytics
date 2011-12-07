<?php

/**
 * BaseContainer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $capacidad
 * @property string $tipo
 * @property integer $venta_chatarra_id
 * @property VentaChatarra $VentaChatarra
 * @property Doctrine_Collection $Piezas
 * 
 * @method integer             getId()                Returns the current record's "id" value
 * @method integer             getCapacidad()         Returns the current record's "capacidad" value
 * @method string              getTipo()              Returns the current record's "tipo" value
 * @method integer             getVentaChatarraId()   Returns the current record's "venta_chatarra_id" value
 * @method VentaChatarra       getVentaChatarra()     Returns the current record's "VentaChatarra" value
 * @method Doctrine_Collection getPiezas()            Returns the current record's "Piezas" collection
 * @method Container           setId()                Sets the current record's "id" value
 * @method Container           setCapacidad()         Sets the current record's "capacidad" value
 * @method Container           setTipo()              Sets the current record's "tipo" value
 * @method Container           setVentaChatarraId()   Sets the current record's "venta_chatarra_id" value
 * @method Container           setVentaChatarra()     Sets the current record's "VentaChatarra" value
 * @method Container           setPiezas()            Sets the current record's "Piezas" collection
 * 
 * @package    tesis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseContainer extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('container');
        $this->hasColumn('id', 'integer', 10, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 10,
             ));
        $this->hasColumn('capacidad', 'integer', 10, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 10,
             ));
        $this->hasColumn('tipo', 'string', 45, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 45,
             ));
        $this->hasColumn('venta_chatarra_id', 'integer', 10, array(
             'type' => 'integer',
             'length' => 10,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('VentaChatarra', array(
             'local' => 'venta_chatarra_id',
             'foreign' => 'id'));

        $this->hasMany('Pieza as Piezas', array(
             'local' => 'id',
             'foreign' => 'container_id'));
    }
}