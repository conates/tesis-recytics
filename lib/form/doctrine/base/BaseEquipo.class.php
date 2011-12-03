<?php

/**
 * BaseEquipo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $origen
 * @property string $marca
 * @property integer $peso
 * @property enum $estado
 * @property string $detalle
 * @property integer $user_id
 * @property integer $categoria_id
 * @property integer $empleado_id
 * @property integer $venta_equipo_id
 * @property Categoria $Categoria
 * @property Empleado $Empleado
 * @property VentaEquipo $VentaEquipo
 * @property sfGuardUser $sfGuardUser
 * 
 * @method integer     getId()              Returns the current record's "id" value
 * @method string      getOrigen()          Returns the current record's "origen" value
 * @method string      getMarca()           Returns the current record's "marca" value
 * @method integer     getPeso()            Returns the current record's "peso" value
 * @method enum        getEstado()          Returns the current record's "estado" value
 * @method string      getDetalle()         Returns the current record's "detalle" value
 * @method integer     getUserId()          Returns the current record's "user_id" value
 * @method integer     getCategoriaId()     Returns the current record's "categoria_id" value
 * @method integer     getEmpleadoId()      Returns the current record's "empleado_id" value
 * @method integer     getVentaEquipoId()   Returns the current record's "venta_equipo_id" value
 * @method Categoria   getCategoria()       Returns the current record's "Categoria" value
 * @method Empleado    getEmpleado()        Returns the current record's "Empleado" value
 * @method VentaEquipo getVentaEquipo()     Returns the current record's "VentaEquipo" value
 * @method sfGuardUser getSfGuardUser()     Returns the current record's "sfGuardUser" value
 * @method Equipo      setId()              Sets the current record's "id" value
 * @method Equipo      setOrigen()          Sets the current record's "origen" value
 * @method Equipo      setMarca()           Sets the current record's "marca" value
 * @method Equipo      setPeso()            Sets the current record's "peso" value
 * @method Equipo      setEstado()          Sets the current record's "estado" value
 * @method Equipo      setDetalle()         Sets the current record's "detalle" value
 * @method Equipo      setUserId()          Sets the current record's "user_id" value
 * @method Equipo      setCategoriaId()     Sets the current record's "categoria_id" value
 * @method Equipo      setEmpleadoId()      Sets the current record's "empleado_id" value
 * @method Equipo      setVentaEquipoId()   Sets the current record's "venta_equipo_id" value
 * @method Equipo      setCategoria()       Sets the current record's "Categoria" value
 * @method Equipo      setEmpleado()        Sets the current record's "Empleado" value
 * @method Equipo      setVentaEquipo()     Sets the current record's "VentaEquipo" value
 * @method Equipo      setSfGuardUser()     Sets the current record's "sfGuardUser" value
 * 
 * @package    tesis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEquipo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('equipo');
        $this->hasColumn('id', 'integer', 10, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 10,
             ));
        $this->hasColumn('origen', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             'notnull' => true,
             ));
        $this->hasColumn('marca', 'string', 45, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 45,
             ));
        $this->hasColumn('peso', 'integer', 10, array(
             'type' => 'integer',
             'length' => 10,
             'notnull' => true,
             ));
        $this->hasColumn('estado', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'Bueno',
              1 => 'Malo',
             ),
             'notnull' => true,
             ));
        $this->hasColumn('detalle', 'string', 500, array(
             'type' => 'string',
             'length' => 500,
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'unique' => true,
             ));
        $this->hasColumn('categoria_id', 'integer', 10, array(
             'type' => 'integer',
             'length' => 10,
             ));
        $this->hasColumn('empleado_id', 'integer', 10, array(
             'type' => 'integer',
             'length' => 10,
             ));
        $this->hasColumn('venta_equipo_id', 'integer', 10, array(
             'type' => 'integer',
             'length' => 10,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Categoria', array(
             'local' => 'categoria_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Empleado', array(
             'local' => 'empleado_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('VentaEquipo', array(
             'local' => 'venta_equipo_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));
    }
}