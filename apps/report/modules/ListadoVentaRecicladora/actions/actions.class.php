<?php

require_once dirname(__FILE__) . '/../lib/ListadoVentaRecicladoraGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/ListadoVentaRecicladoraGeneratorHelper.class.php';

/**
 * ListadoVentaRecicladora actions.
 *
 * @package    tesis
 * @subpackage ListadoVentaRecicladora
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ListadoVentaRecicladoraActions extends autoListadoVentaRecicladoraActions {

    protected function buildQuery() {
        $query = parent::buildQuery();

        $query
            ->innerjoin("r.Containers c")
            ->innerJoin("c.Piezas p")
            ->Where('p.estado = ?',"Malo")
        ;
        //die($query);
        return $query;
    }

    public function executeExcel(sfWebRequest $request) {
        $this->setLayout(false);
        $this->getResponse()->setHttpHeader('Content-type', 'application/vnd.ms-excel');
        $this->getResponse()->setHttpHeader('Content-Disposition', 'inline; filename="InventarioVentaChatarra.xls"');
        $this->data = Doctrine::getTable('VentaChatarra')->getLitado();
    }

}
