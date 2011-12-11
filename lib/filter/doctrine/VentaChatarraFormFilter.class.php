<?php

/**
 * VentaChatarra filter form.
 *
 * @package    tesis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VentaChatarraFormFilter extends BaseVentaChatarraFormFilter
{
    public function configure() {
        //Widget para el filtro de nombres
      //  $this->widgetSchema['rut'] = new sfWidgetFormFilterInput(array('with_empty' => false));
      //  $this->validatorSchema['rut'] = new sfValidatorPass(array('required' => false));
    }
 /*   public function addRutColumnQuery(Doctrine_Query $query, $field, $values) {

        if ($values['text'] != '') {
            $query
                //->innerJoin("r.Cliente cli")
                //->innerjoin("r.Containers c")
                //->innerJoin("c.Piezas p")
               // ->Where('p.estado = ?', "Malo")
            ->andWhere("cli.rut LIKE ?", '%' . $values['text'] . '%');
            die($query);
        }
    }

    public function getFields() {
        return parent::getFields() + array('rut' => 'Text');
    }*/
}
