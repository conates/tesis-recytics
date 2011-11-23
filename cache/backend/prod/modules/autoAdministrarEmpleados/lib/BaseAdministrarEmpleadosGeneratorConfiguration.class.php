<?php

/**
 * AdministrarEmpleados module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage AdministrarEmpleados
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 12474 2008-10-31 10:41:27Z fabien $
 */
class BaseAdministrarEmpleadosGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getCredentials($action)
  {
    if (0 === strpos($action, '_'))
    {
      $action = substr($action, 1);
    }

    return isset($this->configuration['credentials'][$action]) ? $this->configuration['credentials'][$action] : array();
  }

  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
		//  added show view
	  // return array(  '_delete' => NULL,  '_list' => NULL,  '_show' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  
    return array();
  }

  public function getListObjectActions()
  {
		// =============== Added show view
	  return array(  '_show' => NULL,  '_edit' => NULL,  '_delete' => NULL,);
  
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id%% - %%rut%% - %%nombres%% - %%apellidos%% - %%email%% - %%fecha_nac%% - %%direccion%% - %%ciudad_residencia%% - %%telefono%% - %%fecha_contrato%% - %%fecha_fin_contrato%% - %%sueldo%% - %%user_id%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'AdministrarEmpleados List';
  }

  public function getEditTitle()
  {
    return 'Edit AdministrarEmpleados';
  }

  public function getNewTitle()
  {
    return 'New AdministrarEmpleados';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'rut',  2 => 'nombres',  3 => 'apellidos',  4 => 'email',  5 => 'fecha_nac',  6 => 'direccion',  7 => 'ciudad_residencia',  8 => 'telefono',  9 => 'fecha_contrato',  10 => 'fecha_fin_contrato',  11 => 'sueldo',  12 => 'user_id',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'rut' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nombres' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'apellidos' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'email' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fecha_nac' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'direccion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'ciudad_residencia' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'telefono' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fecha_contrato' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'fecha_fin_contrato' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'sueldo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'user_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'rut' => array(),
      'nombres' => array(),
      'apellidos' => array(),
      'email' => array(),
      'fecha_nac' => array(),
      'direccion' => array(),
      'ciudad_residencia' => array(),
      'telefono' => array(),
      'fecha_contrato' => array(),
      'fecha_fin_contrato' => array(),
      'sueldo' => array(),
      'user_id' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'rut' => array(),
      'nombres' => array(),
      'apellidos' => array(),
      'email' => array(),
      'fecha_nac' => array(),
      'direccion' => array(),
      'ciudad_residencia' => array(),
      'telefono' => array(),
      'fecha_contrato' => array(),
      'fecha_fin_contrato' => array(),
      'sueldo' => array(),
      'user_id' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'rut' => array(),
      'nombres' => array(),
      'apellidos' => array(),
      'email' => array(),
      'fecha_nac' => array(),
      'direccion' => array(),
      'ciudad_residencia' => array(),
      'telefono' => array(),
      'fecha_contrato' => array(),
      'fecha_fin_contrato' => array(),
      'sueldo' => array(),
      'user_id' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'rut' => array(),
      'nombres' => array(),
      'apellidos' => array(),
      'email' => array(),
      'fecha_nac' => array(),
      'direccion' => array(),
      'ciudad_residencia' => array(),
      'telefono' => array(),
      'fecha_contrato' => array(),
      'fecha_fin_contrato' => array(),
      'sueldo' => array(),
      'user_id' => array(),
    );
  }

  public function getFieldsShow()
  {
    return array(
      'id' => array(),
      'rut' => array(),
      'nombres' => array(),
      'apellidos' => array(),
      'email' => array(),
      'fecha_nac' => array(),
      'direccion' => array(),
      'ciudad_residencia' => array(),
      'telefono' => array(),
      'fecha_contrato' => array(),
      'fecha_fin_contrato' => array(),
      'sueldo' => array(),
      'user_id' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'rut' => array(),
      'nombres' => array(),
      'apellidos' => array(),
      'email' => array(),
      'fecha_nac' => array(),
      'direccion' => array(),
      'ciudad_residencia' => array(),
      'telefono' => array(),
      'fecha_contrato' => array(),
      'fecha_fin_contrato' => array(),
      'sueldo' => array(),
      'user_id' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'empleadoForm';
  }

  public function getFormOptions()
  {
    return array();
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'empleadoFormFilter';
  }

	  protected function getConfig()
  {
    $configuration = parent::getConfig();
    $configuration['show'] = $this->getFieldsShow();
    return $configuration;
  }

  protected function compile()
  {
    parent::compile();
    
    $config = $this->getConfig();
    
    // add configuration for the show view 
    $this->configuration['show'] = array( 'fields'         => array(),
                                          'title'          => $this->getShowTitle(),
                                          'actions'        => $this->getShowActions(),
                                          'display'        => $this->getShowDisplay(),
                                        ) ;

    foreach (array('show') as $context)
    {
      foreach ($this->configuration[$context]['actions'] as $action => $parameters)
      {
        $this->configuration[$context]['actions'][$action] = $this->fixActionParameters($action, $parameters);
      }
    }


  }

  public function getShowActions()
  {
    return array(  '_list' => NULL,  '_edit' => NULL, '_delete' => NULL);
  }

  
  public function getShowTitle()
  {
    return 'View AdministrarEmpleados';
  }

  public function getShowDisplay()
  {
      return array(  0 => 'id',  1 => 'rut',  2 => 'nombres',  3 => 'apellidos',  4 => 'email',  5 => 'fecha_nac',  6 => 'direccion',  7 => 'ciudad_residencia',  8 => 'telefono',  9 => 'fecha_contrato',  10 => 'fecha_fin_contrato',  11 => 'sueldo',  12 => 'user_id',);
  }

  public function getFilterForm($filters)
  {
    $class = $this->getFilterFormClass();

    return new $class($filters, $this->getFilterFormOptions());
  }

  public function getFilterFormOptions()
  {
    return array();
  }

  public function getFilterDefaults()
  {
    return array();
  }

  public function getPager($model)
  {
    $class = $this->getPagerClass();

    return new $class($model, $this->getPagerMaxPerPage());
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }

  public function getConnection()
  {
    return null;
  }
}
