<?php

/**
 * VentaChatarra form.
 *
 * @package    tesis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VentaChatarraForm extends BaseVentaChatarraForm
{
  public function configure()
  {
  $range  = range(date('Y'), date('Y')+5);
   $years = array_combine($range,$range);
   $format = '%day%/%month%/%year%'; 
   
   //$this->widgetSchema['fecha'] = 
           //new sfWidgetFormDate(array('format' => $format,'years' => $years));
		   
	$this->validatorSchema['monto'] = 
          new sfValidatorInteger(array(), array('invalid' => 'Debes ingresar un Numero.'));
	
	$this->widgetSchema['fecha'] = new sfWidgetFormJQueryDate(array(
                   'culture' => 'es',
                   'image' => '/images/calendar.gif',
				   'config' => '{changeMonth: true,
					dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"]}',
                   'date_widget' => new sfWidgetFormDate(array('format' => '%day% %month% %year%'))
                ));
  
  }
}
