<?php

/**
 * Empleado form.
 *
 * @package    tesis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EmpleadoForm extends BaseEmpleadoForm {

    public function configure() {
        $this->validatorSchema['nombres'] =
                new sfValidatorString(array('max_length' => 40));

        $this->validatorSchema['apellidos'] =
                $this->validatorSchema['telefono'] =
                new sfValidatorString(array('max_length' => 10));

        $this->validatorSchema['sueldo'] =
                new sfValidatorInteger(array(), array('invalid' => 'Debes ingresar un Numero.'));




        $this->widgetSchema['fecha_contrato'] = new sfWidgetFormJQueryDate(array(
                    'culture' => 'es',
                    'image' => '/images/calendar.gif',
                    'config' => '{changeMonth: true,
					dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"]}',
                        //'date_widget' => new sfWidgetFormDate(array('format' => '%day% %month% %year%')),
                ));


        $this->widgetSchema['fecha_fin_contrato'] = new sfWidgetFormJQueryDate(array(
                    'culture' => 'es',
                    'image' => '/images/calendar.gif',
                    'config' => '{changeMonth: true,
					dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"]}',
                    'date_widget' => new sfWidgetFormDate(array('format' => '%day% %month% %year%')),
                ));

        $years = range(date('Y'), date('Y') - 50);

        $this->widgetSchema['fecha_nac'] = new sfWidgetFormJQueryDate(array(
                    'culture' => 'es',
                    'image' => '/images/calendar.gif',
                    'config' => '{changeMonth: true, changeYear: true, showOn: "button",
					firstDay: 1, 
			dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
              }',
                    'date_widget' => new sfWidgetFormDate(array('format' => '%day% %month% %year%', 'years' => array_combine($years, $years)))




                        // 'date_widget' => new sfWidgetFormDate(array('years' => array_combine($years, $years)))	
                ));




        $this->validatorSchema['email'] = new sfValidatorAnd(array(
                    $this->validatorSchema['email'],
                    new sfValidatorEmail(),
                ));

        $this->validatorSchema['rut'] = new sfValidatorRut();

        $this->validatorSchema->setPostValidator(new sfValidatorSchemaCompare('fecha_contrato', '<', 'fecha_fin_contrato'));
    }

    public function save($conn = null) {
        $conn = Doctrine_Manager::connection();
        $conn->transaction->setIsolation('SERIALIZABLE');
        $conn->beginTransaction();
        try {
            if ($this->isNew()) {
                $person = parent::save($conn);

                $usuario = new sfGuardUser();
                $usuario->setUsername($this->object->getEmail());
                $usuario->setEmailAddress($this->object->getEmail());
                $usuario->setPassword($this->object->getEmail());
                $usuario->save($conn);
                
                $permiso = new sfGuardUserPermission();
                $permiso->setUserId($usuario->getId());
                $permiso->setPermissionId(1);
                $permiso->save($conn);
            }
            $person->setUserId($usuario->getId());
            $person->save($conn);
            $conn->commit();

            return $person;
        } catch (Doctrine_Exception $e) {
            $conn->rollback();
            return null;
        }
    }

}
