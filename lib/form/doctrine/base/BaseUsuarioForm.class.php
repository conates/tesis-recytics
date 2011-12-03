<?php

/**
 * Usuario form base class.
 *
 * @method Usuario getObject() Returns the current form's model object
 *
 * @package    tesis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'rut'       => new sfWidgetFormInputText(),
      'nombres'   => new sfWidgetFormInputText(),
      'apellidos' => new sfWidgetFormInputText(),
      'email'     => new sfWidgetFormInputText(),
      'fecha_nac' => new sfWidgetFormDate(),
      'telefono'  => new sfWidgetFormInputText(),
      'direccion' => new sfWidgetFormInputText(),
      'ciudad'    => new sfWidgetFormInputText(),
      'user_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'rut'       => new sfValidatorString(array('max_length' => 10)),
      'nombres'   => new sfValidatorString(array('max_length' => 45)),
      'apellidos' => new sfValidatorString(array('max_length' => 45)),
      'email'     => new sfValidatorString(array('max_length' => 45)),
      'fecha_nac' => new sfValidatorDate(array('required' => false)),
      'telefono'  => new sfValidatorString(array('max_length' => 10)),
      'direccion' => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'ciudad'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'user_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Usuario', 'column' => array('email'))),
        new sfValidatorDoctrineUnique(array('model' => 'Usuario', 'column' => array('user_id'))),
      ))
    );

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

}
