<?php

/**
 * Cliente filter form.
 *
 * @package    tesis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ClienteFormFilter extends BaseClienteFormFilter {

    public function configure() {
        //Widget para el filtro de nombres
        $this->widgetSchema['razon_social'] = new sfWidgetFormFilterInput(array('with_empty' => false));
        $this->validatorSchema['razon_social'] = new sfValidatorPass(array('required' => false));
    }

    public function addRazonSocialColumnQuery(Doctrine_Query $query, $field, $values) {

        if ($values['text'] != '') {
            
            $query->innerJoin('r.VentaChatarras v')
                    ->andWhere("r.razon_social LIKE ?", '%' . $values['text'] . '%');
        }
    }

    public function getFields() {
        return parent::getFields() + array('razon_social' => 'Text');
    }

}