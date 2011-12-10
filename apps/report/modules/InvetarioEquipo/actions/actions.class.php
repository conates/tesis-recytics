<?php

require_once dirname(__FILE__).'/../lib/InvetarioEquipoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/InvetarioEquipoGeneratorHelper.class.php';

/**
 * InvetarioEquipo actions.
 *
 * @package    tesis
 * @subpackage InvetarioEquipo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class InvetarioEquipoActions extends autoInvetarioEquipoActions
{
    protected function buildQuery() {
        $query = parent::buildQuery();
        $query->addSelect("r.id, c.tipo as tipo, c.nombre_categoria as categoria, count(r.categoria_id) as cantidad")
                ->innerJoin("r.Categoria c")
                ->innerjoin("r.Usuario u")
                ->addWhere('r.venta_equipo_id is null')
                ->groupBy("r.marca")
        ;
        return $query;
    }
    public function executeExcel(sfWebRequest $request) {
        $this->setLayout(false);
        $this->getResponse()->setHttpHeader('Content-type', 'application/vnd.ms-excel');
        $this->getResponse()->setHttpHeader('Content-Disposition', 'inline; filename="InventarioPiezas.xls"');
        $this->data = Doctrine::getTable('Pieza')->getLitado();
       // die("<pre>".print_r($this->data,1)."</pre>");
    }
    
}
