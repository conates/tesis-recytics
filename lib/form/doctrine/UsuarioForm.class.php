<?php

/**
 * Usuario form.
 *
 * @package    tesis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UsuarioForm extends BaseUsuarioForm
{
  public function configure()
  {
  $years = range(date('Y') - 90, date('Y'));
  
	$this->widgetSchema['fecha_nac'] = new sfWidgetFormJQueryDate(array(
                    'culture' => 'es',
                    'image' => '/images/calendar.gif',
'date_widget' => new sfWidgetFormDate(array('format' => '%day% %month% %year%', 'years' => array_combine($years, $years)))
                ));
				
	$this->validatorSchema['email'] = new sfValidatorAnd(array(
                    $this->validatorSchema['email'],
                    new sfValidatorEmail(),
                ));
				
    $this->validatorSchema['rut']= new sfValidatorRut();
  }
}
