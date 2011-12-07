<?php

require_once dirname(__FILE__) . '/../lib/ListadoInventarioGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/ListadoInventarioGeneratorHelper.class.php';

/**
 * ListadoInventario actions.
 *
 * @package    tesis
 * @subpackage ListadoInventario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ListadoInventarioActions extends autoListadoInventarioActions {

    public function executeIndex(sfWebRequest $request) {
        // sorting
        if ($request->getParameter('sort')) {
            $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
        }

        // pager
        if ($request->getParameter('page')) {
            $this->setPage($request->getParameter('page'));
        }

        $this->pager = $this->getPager();
        $this->sort = $this->getSort();

        // has filters? (usefull for activate reset button)
        $this->hasFilters = $this->getUser()->getAttribute('ListadoInventario.filters', $this->configuration->getFilterDefaults(), 'admin_module');
    }

    public function executeExcel(sfWebRequest $request) {
        $this->setLayout(false);
        $this->getResponse()->setHttpHeader('Content-type', 'application/vnd.ms-excel');
        $this->getResponse()->setHttpHeader('Content-Disposition', 'inline; filename="InventarioPiezas.xls"');
        $this->data = Doctrine::getTable('Pieza')->getLitado();
       // die("<pre>".print_r($this->data,1)."</pre>");
    }

    protected function buildQuery() {
        $query = parent::buildQuery();

        $query->addSelect("r.id, c.tipo as tipo, c.nombre_categoria as categoria, count(r.categoria_id) as cantidad")
                ->innerJoin("r.Categoria c")
                ->innerjoin("r.Usuario u")
                ->addWhere('r.venta_pieza_id is null')
                ->groupBy("r.marca")
        ;
        return $query;
    }

}
