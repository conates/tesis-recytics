<?php

/*
 * (c) Francisco Salazar <fralazar@gmail.com>
*/

/**
 * sfValidatorRut validates a chilean RUT. It also converts the input value to a string.
 * Validation algorithm taken from http://www.dcc.uchile.cl/~mortega/ortega.cl/validarrut/
 */
class sfValidatorRut extends sfValidatorBase {
  /**
   * Configures the current validator.
   *
   * Available error codes:
   *
   *  * dv
   *
   * @param array $options   An array of options
   * @param array $messages  An array of error messages
   *
   * @see sfValidatorBase
   */
  protected function configure($options = array(), $messages = array()) {
    $this->addMessage('dv', '"%value%" no es un RUT correcto');

    $this->setOption('empty_value', '');
  }

  /**
   * @see sfValidatorBase
   */
  protected function doClean($value) {
    $clean = (string) $value;

    $dv = substr($value,strpos($value,'-')+1,1);
    $r = substr($value,0,strpos($value,'-'));

    $s=1;
    for($m=0;$r!=0;$r/=10)
      $s=($s+$r%10*(9-$m++%6))%11;

    if($dv != (string) chr($s?$s+47:75))
      throw new sfValidatorError($this, 'dv', array('value' => $value, 'dv' => $this->getOption('error')));

    $length = function_exists('mb_strlen') ? mb_strlen($clean, $this->getCharset()) : strlen($clean);

    return $clean;
  }
}