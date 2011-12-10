<?php

/**
 * VentaEquipo filter form.
 *
 * @package    tesis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VentaEquipoFormFilter extends BaseVentaEquipoFormFilter {

    public function configure() {
        $this->widgetSchema['tipo'] = new sfWidgetFormChoice(array('choices' => array('' => '', 'Contado' => 'Contado', 'Factura' => 'Factura', 'Boleta' => 'Boleta')));

        $this->validatorSchema['tipo'] = new sfValidatorChoice(array('required' => false, 'choices' => array('Contado' => 'Contado', 'Factura' => 'Factura', 'Boleta' => 'Boleta')));
    }

    public function addTipoColumnQuery(Doctrine_Query $query, $field, $values) {
        if ($values['text'] != '') {
            $query//->innerJoin('r.equipos e')
                  ->andWhere("r.tipo LIKE ?", '%' . $values['text'] . '%');
        }
    }

    public function getFields() {
        return parent::getFields() + array('tipo' => 'Text');
    }

}