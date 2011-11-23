<?php use_helper('I18N', 'Date') ?>
<?php include_partial('AdministrarClientes/assets') ?>

<div id="sf_admin_container" class="sf_admin_edit ui-widget ui-widget-content ui-corner-all">
  <div class="fg-toolbar ui-widget-header ui-corner-all">
    <h1><?php echo __('New AdministrarClientes', array(), 'messages') ?></h1>
  </div>

  <?php include_partial('AdministrarClientes/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('AdministrarClientes/form_header', array('cliente' => $cliente, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('AdministrarClientes/form', array('cliente' => $cliente, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('AdministrarClientes/form_footer', array('cliente' => $cliente, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <?php include_partial('AdministrarClientes/themeswitcher') ?>
</div>
