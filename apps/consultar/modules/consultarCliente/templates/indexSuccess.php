<?php use_helper('I18N', 'Date') ?>
<?php include_partial('consultarCliente/assets') ?>

<div id="sf_admin_container">
  <?php include_partial('consultarCliente/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('consultarCliente/list_header', array('pager' => $pager)) ?>
  </div>

      <div id="sf_admin_bar ui-helper-hidden" style="display:none">
      <?php include_partial('consultarCliente/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
    </div>
  
  <div id="sf_admin_content">
    
      

      <?php include_partial('consultarCliente/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper, 'hasFilters' => $hasFilters)) ?>

      <ul class="sf_admin_actions">
        <?php include_partial('consultarCliente/list_batch_actions', array('helper' => $helper)) ?>
      </ul>

      </div>

  <div id="sf_admin_footer">
    <?php include_partial('consultarCliente/list_footer', array('pager' => $pager)) ?>
  </div>

  <?php include_partial('consultarCliente/themeswitcher') ?>
</div>
