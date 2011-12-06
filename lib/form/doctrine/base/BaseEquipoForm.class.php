<?php

/**
 * Equipo form base class.
 *
 * @method Equipo getObject() Returns the current form's model object
 *
 * @package    tesis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEquipoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'origen'          => new sfWidgetFormInputText(),
      'marca'           => new sfWidgetFormInputText(),
      'peso'            => new sfWidgetFormInputText(),
      'estado'          => new sfWidgetFormChoice(array('choices' => array('Bueno' => 'Bueno', 'Malo' => 'Malo'))),
      'detalle'         => new sfWidgetFormTextarea(),
      'usuario_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => false)),
      'categoria_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categoria'), 'add_empty' => false)),
      'empleado_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empleado'), 'add_empty' => false)),
      'venta_equipo_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('VentaEquipo'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'origen'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'marca'           => new sfValidatorString(array('max_length' => 45)),
      'peso'            => new sfValidatorInteger(array('required' => false)),
      'estado'          => new sfValidatorChoice(array('choices' => array(0 => 'Bueno', 1 => 'Malo'), 'required' => false)),
      'detalle'         => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'usuario_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'))),
      'categoria_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Categoria'))),
      'empleado_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empleado'))),
      'venta_equipo_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('VentaEquipo'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('equipo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Equipo';
  }

}
