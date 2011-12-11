<?php

require_once dirname(__FILE__) . '/../lib/ListadoVentaPiezaBuenaGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/ListadoVentaPiezaBuenaGeneratorHelper.class.php';

/**
 * ListadoVentaPiezaBuena actions.
 *
 * @package    tesis
 * @subpackage ListadoVentaPiezaBuena
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ListadoVentaPiezaBuenaActions extends autoListadoVentaPiezaBuenaActions {

    public function executeExcel(sfWebRequest $request) {
        $this->setLayout(false);
        $this->getResponse()->setHttpHeader('Content-type', 'application/vnd.ms-excel');
        $this->getResponse()->setHttpHeader('Content-Disposition', 'inline; filename="InventarioPiezas.xls"');
        $this->data = Doctrine::getTable('VentaPieza')->getLitado();
        // die("<pre>".print_r($this->data,1)."</pre>");
    }

    protected function buildQuery() {
        $query = parent::buildQuery();
//monto, cliente, tipo de venta, fecha 
        $query->select("r.id, r.monto as monto, r.cliente as cliente, r.tipo as tipo, r.fecha as fecha")
                ->innerJoin("r.Piezas p")
                ->where("p.venta_pieza_id is not null")
                ->addwhere("p.estado = ?","Bueno")
        ;
        return $query;
    }

}
