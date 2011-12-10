<?php

/**
 * VentaPieza filter form.
 *
 * @package    tesis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VentaPiezaFormFilter extends BaseVentaPiezaFormFilter {

    public function configure() {
        $this->widgetSchema['categoria_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categoria'), 'add_empty' => true));

        $this->validatorSchema['categoria_id'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Categoria'), 'column' => 'id'));
    }

    public function addCategoriaIdColumnQuery(Doctrine_Query $query, $field, $values) {
        die($query);
        if ($values['text'] != '') {
            $query->from('Pieza p')
                    ->innerJoin('p.VentaPieza v')
                    ->andWhere("p.categoria_id LIKE ?", '%' . $values['text'] . '%');
        }
    }

    public function getFields() {
        return parent::getFields() + array('categoria' => 'Text');
    }

}