<?php

/**
 * Container form.
 *
 * @package    tesis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ContainerForm extends BaseContainerForm
{
  public function configure()
  {
  
  		   
	$this->validatorSchema['capacidad'] = 
          new sfValidatorInteger(array(), array('invalid' => 'Debes ingresar un Numero.'));
  }
}
