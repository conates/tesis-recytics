<?php

/**
 * PiezaTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PiezaTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object PiezaTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Pieza');
    }
    public function getLitado(){
        $query = Doctrine_Query::create()
                ->addSelect("r.id, r.marca as marca,r.detalle as detalle, c.tipo as tipo, c.nombre_categoria as categoria, count(r.categoria_id) as cantidad")
                ->from("Pieza r")
                ->innerJoin("r.Categoria c")
                ->innerjoin("r.Usuario u")
                ->addWhere('r.venta_pieza_id is null')
                ->groupBy("r.marca")
                ->fetchArray()
        ;
                return $query;
    }
}