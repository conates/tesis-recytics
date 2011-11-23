<?php

/**
 * Empleado form base class.
 *
 * @method Empleado getObject() Returns the current form's model object
 *
 * @package    tesis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEmpleadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'rut'                => new sfWidgetFormInputText(),
      'nombres'            => new sfWidgetFormInputText(),
      'apellidos'          => new sfWidgetFormInputText(),
      'email'              => new sfWidgetFormInputText(),
      'fecha_nac'          => new sfWidgetFormDateTime(),
      'direccion'          => new sfWidgetFormInputText(),
      'ciudad_residencia'  => new sfWidgetFormInputText(),
      'telefono'           => new sfWidgetFormInputText(),
      'fecha_contrato'     => new sfWidgetFormDateTime(),
      'fecha_fin_contrato' => new sfWidgetFormDateTime(),
      'sueldo'             => new sfWidgetFormInputText(),
      'user_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'rut'                => new sfValidatorString(array('max_length' => 10)),
      'nombres'            => new sfValidatorString(array('max_length' => 45)),
      'apellidos'          => new sfValidatorString(array('max_length' => 45)),
      'email'              => new sfValidatorString(array('max_length' => 45)),
      'fecha_nac'          => new sfValidatorDateTime(array('required' => false)),
      'direccion'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'ciudad_residencia'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'telefono'           => new sfValidatorInteger(),
      'fecha_contrato'     => new sfValidatorDateTime(),
      'fecha_fin_contrato' => new sfValidatorDateTime(),
      'sueldo'             => new sfValidatorInteger(array('required' => false)),
      'user_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Empleado', 'column' => array('email'))),
        new sfValidatorDoctrineUnique(array('model' => 'Empleado', 'column' => array('user_id'))),
      ))
    );

    $this->widgetSchema->setNameFormat('empleado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Empleado';
  }

}
