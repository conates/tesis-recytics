<?php use_helper('I18N', 'Date') ?>
<?php include_partial('AdministrarVentaPieza/assets') ?>

<div id="sf_admin_container" class="sf_admin_edit ui-widget ui-widget-content ui-corner-all">
  <div class="fg-toolbar ui-widget-header ui-corner-all">
    <h1><?php echo __('Edit AdministrarVentaPieza', array(), 'messages') ?></h1>
  </div>

  <?php include_partial('AdministrarVentaPieza/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('AdministrarVentaPieza/form_header', array('ventapieza' => $ventapieza, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('AdministrarVentaPieza/form', array('ventapieza' => $ventapieza, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('AdministrarVentaPieza/form_footer', array('ventapieza' => $ventapieza, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <?php include_partial('AdministrarVentaPieza/themeswitcher') ?>
</div>
