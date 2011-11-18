<?php

/**
 * Pieza filter form base class.
 *
 * @package    tesis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePiezaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'marca'          => new sfWidgetFormFilterInput(),
      'estado'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'detalle'        => new sfWidgetFormFilterInput(),
      'usuario_id'     => new sfWidgetFormFilterInput(),
      'categoria_id'   => new sfWidgetFormFilterInput(),
      'empleado_id'    => new sfWidgetFormFilterInput(),
      'container_id'   => new sfWidgetFormFilterInput(),
      'venta_pieza_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('VentaPieza'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'marca'          => new sfValidatorPass(array('required' => false)),
      'estado'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'detalle'        => new sfValidatorPass(array('required' => false)),
      'usuario_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'categoria_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'empleado_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'container_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'venta_pieza_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('VentaPieza'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('pieza_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pieza';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'marca'          => 'Text',
      'estado'         => 'Boolean',
      'detalle'        => 'Text',
      'usuario_id'     => 'Number',
      'categoria_id'   => 'Number',
      'empleado_id'    => 'Number',
      'container_id'   => 'Number',
      'venta_pieza_id' => 'ForeignKey',
    );
  }
}
