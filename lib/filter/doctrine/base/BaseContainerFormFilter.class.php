<?php

/**
 * Container filter form base class.
 *
 * @package    tesis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseContainerFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'capacidad'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'venta_chatarra_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('VentaChatarra'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'capacidad'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo'              => new sfValidatorPass(array('required' => false)),
      'venta_chatarra_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('VentaChatarra'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('container_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Container';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'capacidad'         => 'Number',
      'tipo'              => 'Text',
      'venta_chatarra_id' => 'ForeignKey',
    );
  }
}
