<?php

/**
 * BaseVentaPieza
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property timestamp $fecha
 * @property string $tipo
 * @property integer $monto
 * @property string $detalle
 * @property string $cliente
 * @property integer $gastos_envio
 * @property Doctrine_Collection $Piezas
 * 
 * @method integer             getId()           Returns the current record's "id" value
 * @method timestamp           getFecha()        Returns the current record's "fecha" value
 * @method string              getTipo()         Returns the current record's "tipo" value
 * @method integer             getMonto()        Returns the current record's "monto" value
 * @method string              getDetalle()      Returns the current record's "detalle" value
 * @method string              getCliente()      Returns the current record's "cliente" value
 * @method integer             getGastosEnvio()  Returns the current record's "gastos_envio" value
 * @method Doctrine_Collection getPiezas()       Returns the current record's "Piezas" collection
 * @method VentaPieza          setId()           Sets the current record's "id" value
 * @method VentaPieza          setFecha()        Sets the current record's "fecha" value
 * @method VentaPieza          setTipo()         Sets the current record's "tipo" value
 * @method VentaPieza          setMonto()        Sets the current record's "monto" value
 * @method VentaPieza          setDetalle()      Sets the current record's "detalle" value
 * @method VentaPieza          setCliente()      Sets the current record's "cliente" value
 * @method VentaPieza          setGastosEnvio()  Sets the current record's "gastos_envio" value
 * @method VentaPieza          setPiezas()       Sets the current record's "Piezas" collection
 * 
 * @package    tesis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVentaPieza extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('venta_pieza');
        $this->hasColumn('id', 'integer', 10, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 10,
             ));
        $this->hasColumn('fecha', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('tipo', 'string', 45, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 45,
             ));
        $this->hasColumn('monto', 'integer', 10, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 10,
             ));
        $this->hasColumn('detalle', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('cliente', 'string', 45, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 45,
             ));
        $this->hasColumn('gastos_envio', 'integer', 10, array(
             'type' => 'integer',
             'length' => 10,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Pieza as Piezas', array(
             'local' => 'id',
             'foreign' => 'venta_pieza_id'));
    }
}