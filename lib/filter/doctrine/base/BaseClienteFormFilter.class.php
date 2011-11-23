<?php

/**
 * Cliente filter form base class.
 *
 * @package    tesis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseClienteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'rut'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'razon_social'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'giro'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre_representante' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion'            => new sfWidgetFormFilterInput(),
      'telefono_contacto'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'rut'                  => new sfValidatorPass(array('required' => false)),
      'razon_social'         => new sfValidatorPass(array('required' => false)),
      'giro'                 => new sfValidatorPass(array('required' => false)),
      'nombre_representante' => new sfValidatorPass(array('required' => false)),
      'direccion'            => new sfValidatorPass(array('required' => false)),
      'telefono_contacto'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('cliente_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cliente';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'rut'                  => 'Text',
      'razon_social'         => 'Text',
      'giro'                 => 'Text',
      'nombre_representante' => 'Text',
      'direccion'            => 'Text',
      'telefono_contacto'    => 'Number',
    );
  }
}
