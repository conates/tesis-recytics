<?php

/**
 * BasePieza
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $marca
 * @property enum $estado
 * @property string $detalle
 * @property integer $user_id
 * @property integer $categoria_id
 * @property integer $empleado_id
 * @property integer $container_id
 * @property integer $venta_pieza_id
 * @property Categoria $Categoria
 * @property Empleado $Empleado
 * @property Container $Container
 * @property VentaPieza $VentaPieza
 * @property sfGuardUser $sfGuardUser
 * 
 * @method integer     getId()             Returns the current record's "id" value
 * @method string      getMarca()          Returns the current record's "marca" value
 * @method enum        getEstado()         Returns the current record's "estado" value
 * @method string      getDetalle()        Returns the current record's "detalle" value
 * @method integer     getUserId()         Returns the current record's "user_id" value
 * @method integer     getCategoriaId()    Returns the current record's "categoria_id" value
 * @method integer     getEmpleadoId()     Returns the current record's "empleado_id" value
 * @method integer     getContainerId()    Returns the current record's "container_id" value
 * @method integer     getVentaPiezaId()   Returns the current record's "venta_pieza_id" value
 * @method Categoria   getCategoria()      Returns the current record's "Categoria" value
 * @method Empleado    getEmpleado()       Returns the current record's "Empleado" value
 * @method Container   getContainer()      Returns the current record's "Container" value
 * @method VentaPieza  getVentaPieza()     Returns the current record's "VentaPieza" value
 * @method sfGuardUser getSfGuardUser()    Returns the current record's "sfGuardUser" value
 * @method Pieza       setId()             Sets the current record's "id" value
 * @method Pieza       setMarca()          Sets the current record's "marca" value
 * @method Pieza       setEstado()         Sets the current record's "estado" value
 * @method Pieza       setDetalle()        Sets the current record's "detalle" value
 * @method Pieza       setUserId()         Sets the current record's "user_id" value
 * @method Pieza       setCategoriaId()    Sets the current record's "categoria_id" value
 * @method Pieza       setEmpleadoId()     Sets the current record's "empleado_id" value
 * @method Pieza       setContainerId()    Sets the current record's "container_id" value
 * @method Pieza       setVentaPiezaId()   Sets the current record's "venta_pieza_id" value
 * @method Pieza       setCategoria()      Sets the current record's "Categoria" value
 * @method Pieza       setEmpleado()       Sets the current record's "Empleado" value
 * @method Pieza       setContainer()      Sets the current record's "Container" value
 * @method Pieza       setVentaPieza()     Sets the current record's "VentaPieza" value
 * @method Pieza       setSfGuardUser()    Sets the current record's "sfGuardUser" value
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
        $this->hasOne('Categoria', array(
             'local' => 'categoria_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Empleado', array(
             'local' => 'empleado_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Container', array(
             'local' => 'container_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('VentaPieza', array(
             'local' => 'venta_pieza_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));
    }
}