<?php

/**
 * Empleado filter form.
 *
 * @package    tesis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EmpleadoFormFilter extends BaseEmpleadoFormFilter {

    public function configure() {
        $this->widgetSchema['rut'] = new sfWidgetFormFilterInput();
        $this->validatorSchema['rut'] = new sfValidatorPass();
    }

    public function addRutColumnQuery(Doctrine_Query $query, $field, $values) {


        if ($values['text'] != '') {

            $query->andWhere("r.rut LIKE ?", '%' . $values['text'] . '%');
        }
    }

    public function getFields() {
        return parent::getFields() + array('rut' => 'Text');
    }

}