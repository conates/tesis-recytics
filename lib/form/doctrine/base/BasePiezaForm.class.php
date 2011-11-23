<?php

/**
 * Pieza form base class.
 *
 * @method Pieza getObject() Returns the current form's model object
 *
 * @package    tesis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePiezaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'marca'          => new sfWidgetFormInputText(),
      'estado'         => new sfWidgetFormInputCheckbox(),
      'detalle'        => new sfWidgetFormInputText(),
      'user_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'categoria_id'   => new sfWidgetFormInputText(),
      'empleado_id'    => new sfWidgetFormInputText(),
      'container_id'   => new sfWidgetFormInputText(),
      'venta_pieza_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('VentaPieza'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'marca'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'estado'         => new sfValidatorBoolean(array('required' => false)),
      'detalle'        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'user_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'required' => false)),
      'categoria_id'   => new sfValidatorInteger(array('required' => false)),
      'empleado_id'    => new sfValidatorInteger(array('required' => false)),
      'container_id'   => new sfValidatorInteger(array('required' => false)),
      'venta_pieza_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('VentaPieza'), 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Pieza', 'column' => array('user_id')))
    );

    $this->widgetSchema->setNameFormat('pieza[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pieza';
  }

}
