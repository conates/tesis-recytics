<?php

require_once dirname(__FILE__) . '/../lib/consultarVentaPiezaGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/consultarVentaPiezaGeneratorHelper.class.php';

/**
 * consultarVentaPieza actions.
 *
 * @package    tesis
 * @subpackage consultarVentaPieza
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class consultarVentaPiezaActions extends autoConsultarVentaPiezaActions {

    protected function buildQuery() {

        $query = parent::buildQuery();
        $query->addSelect('r.id, sum(r.monto) as total, r.fecha as fecha, r.detalle as detalle, r.cliente as cliente, p.marca as marca, p.categoria_id as categoria')
                //->from('VentaPieza v')
                ->innerJoin("r.Piezas p")
                ->groupBy('r.id')
                ->orderBy('r.monto DESC');
        //echo $query->getSqlQuery();                                    
        return $query;
    }

}
