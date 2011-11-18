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
      'fecha'      => new sfWidgetFormDateTime(),
      'detalle'    => new sfWidgetFormInputText(),
      'tipo'       => new sfWidgetFormInputText(),
      'cliente_id' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'monto'      => new sfValidatorInteger(),
      'fecha'      => new sfValidatorDateTime(),
      'detalle'    => new sfValidatorString(array('max_length' => 255)),
      'tipo'       => new sfValidatorString(array('max_length' => 45)),
      'cliente_id' => new sfValidatorInteger(array('required' => false)),
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
