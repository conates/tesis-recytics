<?php

/**
 * Cliente form base class.
 *
 * @method Cliente getObject() Returns the current form's model object
 *
 * @package    tesis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseClienteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'rut'                  => new sfWidgetFormInputText(),
      'razon_social'         => new sfWidgetFormInputText(),
      'giro'                 => new sfWidgetFormInputText(),
      'nombre_representante' => new sfWidgetFormInputText(),
      'direccion'            => new sfWidgetFormInputText(),
      'telefono_contacto'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'rut'                  => new sfValidatorString(array('max_length' => 10)),
      'razon_social'         => new sfValidatorString(array('max_length' => 45)),
      'giro'                 => new sfValidatorString(array('max_length' => 45)),
      'nombre_representante' => new sfValidatorString(array('max_length' => 45)),
      'direccion'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'telefono_contacto'    => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cliente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cliente';
  }

}
