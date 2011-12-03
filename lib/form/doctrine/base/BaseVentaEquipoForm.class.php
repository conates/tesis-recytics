<?php

/**
 * VentaEquipo form base class.
 *
 * @method VentaEquipo getObject() Returns the current form's model object
 *
 * @package    tesis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVentaEquipoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'fecha'   => new sfWidgetFormDate(),
      'tipo'    => new sfWidgetFormChoice(array('choices' => array('Contado' => 'Contado', 'Factura' => 'Factura', 'Boleta' => 'Boleta'))),
      'monto'   => new sfWidgetFormInputText(),
      'detalle' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fecha'   => new sfValidatorDate(array('required' => false)),
      'tipo'    => new sfValidatorChoice(array('choices' => array(0 => 'Contado', 1 => 'Factura', 2 => 'Boleta'), 'required' => false)),
      'monto'   => new sfValidatorInteger(),
      'detalle' => new sfValidatorString(array('max_length' => 500, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('venta_equipo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VentaEquipo';
  }

}
