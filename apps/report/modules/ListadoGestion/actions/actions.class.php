<?php

require_once dirname(__FILE__) . '/../lib/ListadoGestionGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/ListadoGestionGeneratorHelper.class.php';

/**
 * ListadoGestion actions.
 *
 * @package    tesis
 * @subpackage ListadoGestion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ListadoGestionActions extends autoListadoGestionActions {

    protected function buildQuery() {
        $query = parent::buildQuery();
        $query->addSelect("r.id, r.estado, r.marca, r.detalle")
                ->innerJoin("r.Piezas p")
                ->innerJoin("r.equipos e")
                ->addWhere('p.venta_pieza_id is null')
                ->andWhere('e.venta_equipo_id is null')
        ;
        return $query;
    }

    public function executeExcel(sfWebRequest $request) {
        $this->setLayout(false);
        $this->getResponse()->setHttpHeader('Content-type', 'application/vnd.ms-excel');
        $this->getResponse()->setHttpHeader('Content-Disposition', 'inline; filename="InventarioPiezas.xls"');
        $this->data = Doctrine::getTable('Categoria')->getLitado();
        // die("<pre>".print_r($this->data,1)."</pre>");
    }

}
