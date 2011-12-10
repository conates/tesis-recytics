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
        $query->addSelect('c.id, c.razon_social as nombre, c.rut as rut, c.direccion as direccion, v.tipo as tipo, sum(v.monto) as total')
                ->from('Cliente c')
                ->innerJoin("c.VentaChatarras v")
                ->groupBy('c.id')
                ->orderBy('v.monto DESC');
        //echo $query->getSqlQuery();                                    
        return $query;
    }

}
