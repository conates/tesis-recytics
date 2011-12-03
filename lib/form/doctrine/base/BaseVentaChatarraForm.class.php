<?php

/**
 * VentaChatarra form base class.
 *
 * @method VentaChatarra getObject() Returns the current form's model object
 *
 * @package    tesis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVentaChatarraForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'monto'      => new sfWidgetFormInputText(),
      'fecha'      => new sfWidgetFormDate(),
      'detalle'    => new sfWidgetFormTextarea(),
      'tipo'       => new sfWidgetFormChoice(array('choices' => array('Contado' => 'Contado', 'Factura' => 'Factura', 'Boleta' => 'Boleta'))),
      'cliente_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cliente'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'monto'      => new sfValidatorInteger(),
      'fecha'      => new sfValidatorDate(),
      'detalle'    => new sfValidatorString(array('max_length' => 500)),
      'tipo'       => new sfValidatorChoice(array('choices' => array(0 => 'Contado', 1 => 'Factura', 2 => 'Boleta'), 'required' => false)),
      'cliente_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Cliente'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('venta_chatarra[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VentaChatarra';
  }

}
