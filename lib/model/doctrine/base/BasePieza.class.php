<?php

/**
 * BasePieza
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $marca
 * @property boolean $estado
 * @property string $detalle
 * @property integer $usuario_id
 * @property integer $categoria_id
 * @property integer $empleado_id
 * @property integer $container_id
 * @property integer $venta_pieza_id
 * @property VentaPieza $VentaPieza
 * 
 * @method integer    getId()             Returns the current record's "id" value
 * @method string     getMarca()          Returns the current record's "marca" value
 * @method boolean    getEstado()         Returns the current record's "estado" value
 * @method string     getDetalle()        Returns the current record's "detalle" value
 * @method integer    getUsuarioId()      Returns the current record's "usuario_id" value
 * @method integer    getCategoriaId()    Returns the current record's "categoria_id" value
 * @method integer    getEmpleadoId()     Returns the current record's "empleado_id" value
 * @method integer    getContainerId()    Returns the current record's "container_id" value
 * @method integer    getVentaPiezaId()   Returns the current record's "venta_pieza_id" value
 * @method VentaPieza getVentaPieza()     Returns the current record's "VentaPieza" value
 * @method Pieza      setId()             Sets the current record's "id" value
 * @method Pieza      setMarca()          Sets the current record's "marca" value
 * @method Pieza      setEstado()         Sets the current record's "estado" value
 * @method Pieza      setDetalle()        Sets the current record's "detalle" value
 * @method Pieza      setUsuarioId()      Sets the current record's "usuario_id" value
 * @method Pieza      setCategoriaId()    Sets the current record's "categoria_id" value
 * @method Pieza      setEmpleadoId()     Sets the current record's "empleado_id" value
 * @method Pieza      setContainerId()    Sets the current record's "container_id" value
 * @method Pieza      setVentaPiezaId()   Sets the current record's "venta_pieza_id" value
 * @method Pieza      setVentaPieza()     Sets the current record's "VentaPieza" value
 * 
 * @package    tesis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePieza extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('pieza');
        $this->hasColumn('id', 'integer', 10, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 10,
             ));
        $this->hasColumn('marca', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('estado', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('detalle', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('usuario_id', 'integer', 10, array(
             'type' => 'integer',
             'length' => 10,
             ));
        $this->hasColumn('categoria_id', 'integer', 10, array(
             'type' => 'integer',
             'length' => 10,
             ));
        $this->hasColumn('empleado_id', 'integer', 10, array(
             'type' => 'integer',
             'length' => 10,
             ));
        $this->hasColumn('container_id', 'integer', 10, array(
             'type' => 'integer',
             'length' => 10,
             ));
        $this->hasColumn('venta_pieza_id', 'integer', 10, array(
             'type' => 'integer',
             'length' => 10,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('VentaPieza', array(
             'local' => 'venta_pieza_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}