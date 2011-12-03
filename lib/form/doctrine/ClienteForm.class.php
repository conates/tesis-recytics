<?php

/**
 * Cliente form.
 *
 * @package    tesis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ClienteForm extends BaseClienteForm
{
  public function configure()
  {
  //$this->widgetSchema['rut'] = new sfWidgetFormInputText(array("label" => "RUT"));  
    
  $this->validatorSchema['razon_social'] = 
         new sfValidatorString(array('max_length' => 45));
		 
  $this->validatorSchema['giro'] = 
         new sfValidatorString(array('max_length' => 45));
		 
  $this->validatorSchema['nombre_representante'] = 
         new sfValidatorString(array('max_length' => 45));
		 
   $this->validatorSchema['direccion'] = 
         new sfValidatorString(array('max_length' => 200));
	
	$this->validatorSchema['telefono_contacto'] = 
          new sfValidatorString(array('max_length' => 45));
	
    $this->validatorSchema['rut']= new sfValidatorRut();
  
  
  
  }
}
