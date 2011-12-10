<?php

require_once dirname(__FILE__) . '/../lib/consultarEmpleadoGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/consultarEmpleadoGeneratorHelper.class.php';

/**
 * consultarEmpleado actions.
 *
 * @package    tesis
 * @subpackage consultarEmpleado
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class consultarEmpleadoActions extends autoConsultarEmpleadoActions {

    protected function buildQuery() {

        $query = parent::buildQuery();
        $query->addSelect('e.id, e.nombres as nombres, e.apellidos as apellidos, e.user_id as cargo,  count(a.empleado_id) as total')
                ->from('Empleado e')
                ->innerJoin("e.equipos a")
                ->groupBy(' e.id');

        return $query;
    }

}
