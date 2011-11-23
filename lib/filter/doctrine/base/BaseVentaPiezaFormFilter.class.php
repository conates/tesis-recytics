<?php

/**
 * VentaPieza filter form base class.
 *
 * @package    tesis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVentaPiezaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'tipo'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'detalle'      => new sfWidgetFormFilterInput(),
      'cliente'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gastos_envio' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'fecha'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'tipo'         => new sfValidatorPass(array('required' => false)),
      'monto'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'detalle'      => new sfValidatorPass(array('required' => false)),
      'cliente'      => new sfValidatorPass(array('required' => false)),
      'gastos_envio' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('venta_pieza_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VentaPieza';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'fecha'        => 'Date',
      'tipo'         => 'Text',
      'monto'        => 'Number',
      'detalle'      => 'Text',
      'cliente'      => 'Text',
      'gastos_envio' => 'Number',
    );
  }
}
