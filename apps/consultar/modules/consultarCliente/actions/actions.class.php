<?php

require_once dirname(__FILE__) . '/../lib/consultarClienteGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/consultarClienteGeneratorHelper.class.php';

/**
 * consultarCliente actions.
 *
 * @package    tesis
 * @subpackage consultarCliente
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class consultarClienteActions extends autoConsultarClienteActions {

    protected function buildQuery() {

        $query = parent::buildQuery();
        $query->addSelect('r.id, r.razon_social as nombre, r.rut as rut, r.direccion as direccion, v.tipo as tipo, sum(v.monto) as total')
                ->innerJoin("r.VentaChatarras v")
                ->groupBy('r.id')
                ->orderBy('v.monto DESC');
        return $query;
    }

}
