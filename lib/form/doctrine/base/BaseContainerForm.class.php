<?php

/**
 * Container form base class.
 *
 * @method Container getObject() Returns the current form's model object
 *
 * @package    tesis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseContainerForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'capacidad'         => new sfWidgetFormInputText(),
      'tipo'              => new sfWidgetFormInputText(),
      'venta_chatarra_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('VentaChatarra'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'capacidad'         => new sfValidatorInteger(),
      'tipo'              => new sfValidatorString(array('max_length' => 45)),
      'venta_chatarra_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('VentaChatarra'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('container[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Container';
  }

}
