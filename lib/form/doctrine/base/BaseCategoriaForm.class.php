<?php

/**
 * Categoria form base class.
 *
 * @method Categoria getObject() Returns the current form's model object
 *
 * @package    tesis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCategoriaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'nombre_categoria' => new sfWidgetFormChoice(array('choices' => array('MB' => 'MB', 'HDD' => 'HDD', 'MEM' => 'MEM', 'PANT' => 'PANT', 'CPU' => 'CPU', 'TEC' => 'TEC', 'MOU' => 'MOU', 'BAT' => 'BAT'))),
      'descripcion'      => new sfWidgetFormTextarea(),
      'tipo'             => new sfWidgetFormChoice(array('choices' => array('Pieza' => 'Pieza', 'Equipo' => 'Equipo'))),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre_categoria' => new sfValidatorChoice(array('choices' => array(0 => 'MB', 1 => 'HDD', 2 => 'MEM', 3 => 'PANT', 4 => 'CPU', 5 => 'TEC', 6 => 'MOU', 7 => 'BAT'), 'required' => false)),
      'descripcion'      => new sfValidatorString(array('max_length' => 500)),
      'tipo'             => new sfValidatorChoice(array('choices' => array(0 => 'Pieza', 1 => 'Equipo'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('categoria[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Categoria';
  }

}
