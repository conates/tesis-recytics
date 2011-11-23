<?php

/**
 * Empleado filter form base class.
 *
 * @package    tesis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEmpleadoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'rut'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombres'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'apellidos'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_nac'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'direccion'          => new sfWidgetFormFilterInput(),
      'ciudad_residencia'  => new sfWidgetFormFilterInput(),
      'telefono'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_contrato'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_fin_contrato' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'sueldo'             => new sfWidgetFormFilterInput(),
      'user_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'rut'                => new sfValidatorPass(array('required' => false)),
      'nombres'            => new sfValidatorPass(array('required' => false)),
      'apellidos'          => new sfValidatorPass(array('required' => false)),
      'email'              => new sfValidatorPass(array('required' => false)),
      'fecha_nac'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'direccion'          => new sfValidatorPass(array('required' => false)),
      'ciudad_residencia'  => new sfValidatorPass(array('required' => false)),
      'telefono'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_contrato'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fecha_fin_contrato' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'sueldo'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'user_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('empleado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Empleado';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'rut'                => 'Text',
      'nombres'            => 'Text',
      'apellidos'          => 'Text',
      'email'              => 'Text',
      'fecha_nac'          => 'Date',
      'direccion'          => 'Text',
      'ciudad_residencia'  => 'Text',
      'telefono'           => 'Number',
      'fecha_contrato'     => 'Date',
      'fecha_fin_contrato' => 'Date',
      'sueldo'             => 'Number',
      'user_id'            => 'ForeignKey',
    );
  }
}
