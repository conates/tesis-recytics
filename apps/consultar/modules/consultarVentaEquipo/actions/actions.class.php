<?php

require_once dirname(__FILE__) . '/../lib/consultarVentaEquipoGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/consultarVentaEquipoGeneratorHelper.class.php';

/**
 * consultarVentaEquipo actions.
 *
 * @package    tesis
 * @subpackage consultarVentaEquipo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class consultarVentaEquipoActions extends autoConsultarVentaEquipoActions {

    protected function buildQuery() {

        $query = parent::buildQuery();
        $query->addSelect('v.id, e.marca as marca, e.estado as estado, v.detalle as detalle, sum(v.monto) as total, v.tipo as tipo')
                ->from('VentaEquipo v')
                ->innerJoin("v.equipos e")
                ->groupBy('v.id')
                ->orderBy('v.monto DESC');
        //echo $query->getSqlQuery();                                    
        return $query;
    }

}
