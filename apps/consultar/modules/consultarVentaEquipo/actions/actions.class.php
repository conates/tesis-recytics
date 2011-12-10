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
        $query->addSelect('r.id, e.marca as marca, e.estado as estado, r.detalle as detalle, sum(r.monto) as total, r.tipo as tipo')
                ->innerJoin("r.equipos e")
                ->groupBy('r.id')
                ->orderBy('r.monto DESC');
        return $query;
    }

}
