<?php

/**
 * Equipo filter form base class.
 *
 * @package    tesis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEquipoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'origen'          => new sfWidgetFormFilterInput(),
      'marca'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'peso'            => new sfWidgetFormFilterInput(),
      'estado'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'detalle'         => new sfWidgetFormFilterInput(),
      'usuario_id'      => new sfWidgetFormFilterInput(),
      'categoria_id'    => new sfWidgetFormFilterInput(),
      'empleado_id'     => new sfWidgetFormFilterInput(),
      'venta_equipo_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('VentaEquipo'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'origen'          => new sfValidatorPass(array('required' => false)),
      'marca'           => new sfValidatorPass(array('required' => false)),
      'peso'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estado'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'detalle'         => new sfValidatorPass(array('required' => false)),
      'usuario_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'categoria_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'empleado_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'venta_equipo_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('VentaEquipo'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('equipo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Equipo';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'origen'          => 'Text',
      'marca'           => 'Text',
      'peso'            => 'Number',
      'estado'          => 'Boolean',
      'detalle'         => 'Text',
      'usuario_id'      => 'Number',
      'categoria_id'    => 'Number',
      'empleado_id'     => 'Number',
      'venta_equipo_id' => 'ForeignKey',
    );
  }
}
