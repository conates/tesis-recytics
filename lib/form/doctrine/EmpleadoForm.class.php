<?php

/**
 * Empleado form.
 *
 * @package    tesis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EmpleadoForm extends BaseEmpleadoForm
{
  public function configure()
  {
  $this->widgetSchema['rut'] = new sfWidgetFormInputText(array("label" => "RUT"));
  
  $this->validatorSchema['rut'] = new sfValidatorRut();
  
  $this->validatorSchema['nombres'] = 
         new sfValidatorString(array('max_length' => 40));
		 
  $this->validatorSchema['apellidos'] = 
         new sfValidatorString(array('max_length' => 40));
		 
  $this->validatorSchema['email'] = 
         new sfValidatorEmail(array(), array('invalid' => 'La Direccion no es valida.(debe ser xxx@ccc.com)'));
		 
  $this->validatorSchema['telefono'] = 
  new sfValidatorInteger(array(), array('invalid' => 'Debes ingresar un Numero.'));
  
  $this->validatorSchema['sueldo'] = 
  new sfValidatorInteger(array(), array('invalid' => 'Debes ingresar un Numero.'));
  
    
   $range1  = range(date('Y'), date('Y')-50);
   $years1 = array_combine($range1,$range1);
   $format1 = '%day%/%month%/%year%'; 
   $this->widgetSchema['fecha_nac'] = 
           new sfWidgetFormDate(array('format' => $format1,'years' => $years1));
   
   
   
   $range  = range(date('Y'), date('Y')+5);
   $years = array_combine($range,$range);
   $format = '%day%/%month%/%year%'; 
   
   $this->widgetSchema['fecha_contrato'] = new sfWidgetFormJQueryDate(array(
                    'culture' => 'es',
                    'image' => '/images/calendar.gif'
                ));
	$this->widgetSchema['fecha_fin_contrato'] = new sfWidgetFormJQueryDate(array(
                    'culture' => 'es',
                    'image' => '/images/calendar.gif'
                ));
   
   //$this->widgetSchema['fecha_contrato'] = 
           //new sfWidgetFormDate(array('format' => $format,'years' => $years));
   
   //$this->widgetSchema['fecha_fin_contrato'] = 
          // new sfWidgetFormDate(array('format' => $format,'years' => $years));
      
   $this->validatorSchema->setPostValidator(new sfValidatorSchemaCompare('fecha_contrato', '<', 'fecha_fin_contrato'));
  
  }
}
