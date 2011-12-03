<?php

/**
 * BaseCategoria
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property enum $nombre_categoria
 * @property string $descripcion
 * @property enum $tipo
 * @property Doctrine_Collection $equipos
 * @property Doctrine_Collection $Piezas
 * 
 * @method integer             getId()               Returns the current record's "id" value
 * @method enum                getNombreCategoria()  Returns the current record's "nombre_categoria" value
 * @method string              getDescripcion()      Returns the current record's "descripcion" value
 * @method enum                getTipo()             Returns the current record's "tipo" value
 * @method Doctrine_Collection getEquipos()          Returns the current record's "equipos" collection
 * @method Doctrine_Collection getPiezas()           Returns the current record's "Piezas" collection
 * @method Categoria           setId()               Sets the current record's "id" value
 * @method Categoria           setNombreCategoria()  Sets the current record's "nombre_categoria" value
 * @method Categoria           setDescripcion()      Sets the current record's "descripcion" value
 * @method Categoria           setTipo()             Sets the current record's "tipo" value
 * @method Categoria           setEquipos()          Sets the current record's "equipos" collection
 * @method Categoria           setPiezas()           Sets the current record's "Piezas" collection
 * 
 * @package    tesis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCategoria extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('categoria');
        $this->hasColumn('id', 'integer', 10, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 10,
             ));
        $this->hasColumn('nombre_categoria', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'MB',
              1 => 'HDD',
              2 => 'MEM',
              3 => 'PANT',
              4 => 'CPU',
              5 => 'TEC',
              6 => 'MOU',
              7 => 'BAT',
             ),
             ));
        $this->hasColumn('descripcion', 'string', 500, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 500,
             ));
        $this->hasColumn('tipo', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'Pieza',
              1 => 'Equipo',
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Equipo as equipos', array(
             'local' => 'id',
             'foreign' => 'categoria_id'));

        $this->hasMany('Pieza as Piezas', array(
             'local' => 'id',
             'foreign' => 'categoria_id'));
    }
}