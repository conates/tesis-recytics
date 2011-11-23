<?php

/**
 * AdministrarPiezas module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage AdministrarPiezas
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 12474 2008-10-31 10:41:27Z fabien $
 */
class BaseAdministrarPiezasGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%id%% - %%marca%% - %%estado%% - %%detalle%% - %%user_id%% - %%categoria_id%% - %%empleado_id%% - %%container_id%% - %%venta_pieza_id%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'AdministrarPiezas List';
  }

  public function getEditTitle()
  {
    return 'Edit AdministrarPiezas';
  }

  public function getNewTitle()
  {
    return 'New AdministrarPiezas';
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
    return array(  0 => 'id',  1 => 'marca',  2 => 'estado',  3 => 'detalle',  4 => 'user_id',  5 => 'categoria_id',  6 => 'empleado_id',  7 => 'container_id',  8 => 'venta_pieza_id',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'marca' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'estado' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'detalle' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'user_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'categoria_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'empleado_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'container_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'venta_pieza_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'marca' => array(),
      'estado' => array(),
      'detalle' => array(),
      'user_id' => array(),
      'categoria_id' => array(),
      'empleado_id' => array(),
      'container_id' => array(),
      'venta_pieza_id' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'marca' => array(),
      'estado' => array(),
      'detalle' => array(),
      'user_id' => array(),
      'categoria_id' => array(),
      'empleado_id' => array(),
      'container_id' => array(),
      'venta_pieza_id' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'marca' => array(),
      'estado' => array(),
      'detalle' => array(),
      'user_id' => array(),
      'categoria_id' => array(),
      'empleado_id' => array(),
      'container_id' => array(),
      'venta_pieza_id' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'marca' => array(),
      'estado' => array(),
      'detalle' => array(),
      'user_id' => array(),
      'categoria_id' => array(),
      'empleado_id' => array(),
      'container_id' => array(),
      'venta_pieza_id' => array(),
    );
  }

  public function getFieldsShow()
  {
    return array(
      'id' => array(),
      'marca' => array(),
      'estado' => array(),
      'detalle' => array(),
      'user_id' => array(),
      'categoria_id' => array(),
      'empleado_id' => array(),
      'container_id' => array(),
      'venta_pieza_id' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'marca' => array(),
      'estado' => array(),
      'detalle' => array(),
      'user_id' => array(),
      'categoria_id' => array(),
      'empleado_id' => array(),
      'container_id' => array(),
      'venta_pieza_id' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'piezaForm';
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
    return 'piezaFormFilter';
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
    return 'View AdministrarPiezas';
  }

  public function getShowDisplay()
  {
      return array(  0 => 'id',  1 => 'marca',  2 => 'estado',  3 => 'detalle',  4 => 'user_id',  5 => 'categoria_id',  6 => 'empleado_id',  7 => 'container_id',  8 => 'venta_pieza_id',);
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
