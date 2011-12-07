<?php

/**
 * BaseUsuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $rut
 * @property string $nombres
 * @property string $apellidos
 * @property string $email
 * @property date $fecha_nac
 * @property string $telefono
 * @property string $direccion
 * @property string $ciudad
 * @property integer $user_id
 * @property sfGuardUser $sfGuardUser
 * @property Doctrine_Collection $equipos
 * @property Doctrine_Collection $Piezas
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getRut()         Returns the current record's "rut" value
 * @method string              getNombres()     Returns the current record's "nombres" value
 * @method string              getApellidos()   Returns the current record's "apellidos" value
 * @method string              getEmail()       Returns the current record's "email" value
 * @method date                getFechaNac()    Returns the current record's "fecha_nac" value
 * @method string              getTelefono()    Returns the current record's "telefono" value
 * @method string              getDireccion()   Returns the current record's "direccion" value
 * @method string              getCiudad()      Returns the current record's "ciudad" value
 * @method integer             getUserId()      Returns the current record's "user_id" value
 * @method sfGuardUser         getSfGuardUser() Returns the current record's "sfGuardUser" value
 * @method Doctrine_Collection getEquipos()     Returns the current record's "equipos" collection
 * @method Doctrine_Collection getPiezas()      Returns the current record's "Piezas" collection
 * @method Usuario             setId()          Sets the current record's "id" value
 * @method Usuario             setRut()         Sets the current record's "rut" value
 * @method Usuario             setNombres()     Sets the current record's "nombres" value
 * @method Usuario             setApellidos()   Sets the current record's "apellidos" value
 * @method Usuario             setEmail()       Sets the current record's "email" value
 * @method Usuario             setFechaNac()    Sets the current record's "fecha_nac" value
 * @method Usuario             setTelefono()    Sets the current record's "telefono" value
 * @method Usuario             setDireccion()   Sets the current record's "direccion" value
 * @method Usuario             setCiudad()      Sets the current record's "ciudad" value
 * @method Usuario             setUserId()      Sets the current record's "user_id" value
 * @method Usuario             setSfGuardUser() Sets the current record's "sfGuardUser" value
 * @method Usuario             setEquipos()     Sets the current record's "equipos" collection
 * @method Usuario             setPiezas()      Sets the current record's "Piezas" collection
 * 
 * @package    tesis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUsuario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('usuario');
        $this->hasColumn('id', 'integer', 10, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 10,
             ));
        $this->hasColumn('rut', 'string', 10, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 10,
             ));
        $this->hasColumn('nombres', 'string', 45, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 45,
             ));
        $this->hasColumn('apellidos', 'string', 45, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 45,
             ));
        $this->hasColumn('email', 'string', 45, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 45,
             ));
        $this->hasColumn('fecha_nac', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('telefono', 'string', 10, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 10,
             ));
        $this->hasColumn('direccion', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('ciudad', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'unique' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $this->hasMany('Equipo as equipos', array(
             'local' => 'id',
             'foreign' => 'usuario_id'));

        $this->hasMany('Pieza as Piezas', array(
             'local' => 'id',
             'foreign' => 'usuario_id'));
    }
}