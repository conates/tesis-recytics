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
      'estado'         => new sfWidgetFormChoice(array('choices' => array('Bueno' => 'Bueno', 'Malo' => 'Malo'))),
      'detalle'        => new sfWidgetFormTextarea(),
      'usuario_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => false)),
      'categoria_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categoria'), 'add_empty' => false)),
      'empleado_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empleado'), 'add_empty' => false)),
      'container_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Container'), 'add_empty' => true)),
      'venta_pieza_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('VentaPieza'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'marca'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'estado'         => new sfValidatorChoice(array('choices' => array(0 => 'Bueno', 1 => 'Malo'), 'required' => false)),
      'detalle'        => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'usuario_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'))),
      'categoria_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Categoria'))),
      'empleado_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empleado'))),
      'container_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Container'), 'required' => false)),
      'venta_pieza_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('VentaPieza'), 'required' => false)),
    ));

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
