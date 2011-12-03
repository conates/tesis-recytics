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
  $this->validatorSchema['nombres'] = 
         new sfValidatorString(array('max_length' => 40));
		 
  $this->validatorSchema['apellidos'] = 
         new sfValidatorString(array('max_length' => 40));
		 
  $this->validatorSchema['telefono'] = 
  new sfValidatorInteger(array(), array('invalid' => 'Debes ingresar un Numero.'));
  
  $this->validatorSchema['sueldo'] = 
  new sfValidatorInteger(array(), array('invalid' => 'Debes ingresar un Numero.'));
  
    
   $years = range(date('Y') - 90, date('Y'));
   
   $this->widgetSchema['fecha_contrato'] = new sfWidgetFormJQueryDate(array(
                    'culture' => 'es',
                    'image' => '/images/calendar.gif',
	    'date_widget' => new sfWidgetFormDate(array('format' => '%day% %month% %year%')),
                        ));
				
				
	$this->widgetSchema['fecha_fin_contrato'] = new sfWidgetFormJQueryDate(array(
                    'culture' => 'es',
                    'image' => '/images/calendar.gif',
	    'date_widget' => new sfWidgetFormDate(array('format' => '%day% %month% %year%')),
                ));
	$this->widgetSchema['fecha_nac'] = new sfWidgetFormJQueryDate(array(
                   'culture' => 'es',
                    'image' => '/images/calendar.gif',
'date_widget' => new sfWidgetFormDate(array('format' => '%day% %month% %year%', 'years' => array_combine($years, $years)))
		
       // 'date_widget' => new sfWidgetFormDate(array('years' => array_combine($years, $years)))	
                ));
				
	
	
	
	$this->validatorSchema['email'] = new sfValidatorAnd(array(
                    $this->validatorSchema['email'],
                    new sfValidatorEmail(),
                ));
				
    $this->validatorSchema['rut']= new sfValidatorRut();

	$this->validatorSchema->setPostValidator(new sfValidatorSchemaCompare('fecha_contrato', '<', 'fecha_fin_contrato'));
  
  }
}
