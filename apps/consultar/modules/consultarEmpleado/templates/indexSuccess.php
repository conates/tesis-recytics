<?php use_helper('I18N', 'Date') ?>
<?php include_partial('consultarEmpleado/assets') ?>

<div id="sf_admin_container">
  <?php include_partial('consultarEmpleado/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('consultarEmpleado/list_header', array('pager' => $pager)) ?>
  </div>

      <div id="sf_admin_bar ui-helper-hidden" style="display:none">
      <?php include_partial('consultarEmpleado/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
    </div>
  
  <div id="sf_admin_content">
    
    

      <?php include_partial('consultarEmpleado/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper, 'hasFilters' => $hasFilters)) ?>

      <ul class="sf_admin_actions">
        <?php include_partial('consultarEmpleado/list_batch_actions', array('helper' => $helper)) ?>
      </ul>

      </div>

  <div id="sf_admin_footer">
    <?php include_partial('consultarEmpleado/list_footer', array('pager' => $pager)) ?>
  </div>

  <?php include_partial('consultarEmpleado/themeswitcher') ?>
</div>
