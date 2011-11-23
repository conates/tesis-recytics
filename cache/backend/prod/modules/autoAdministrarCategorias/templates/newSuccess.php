<?php use_helper('I18N', 'Date') ?>
<?php include_partial('AdministrarCategorias/assets') ?>

<div id="sf_admin_container" class="sf_admin_edit ui-widget ui-widget-content ui-corner-all">
  <div class="fg-toolbar ui-widget-header ui-corner-all">
    <h1><?php echo __('New AdministrarCategorias', array(), 'messages') ?></h1>
  </div>

  <?php include_partial('AdministrarCategorias/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('AdministrarCategorias/form_header', array('categoria' => $categoria, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('AdministrarCategorias/form', array('categoria' => $categoria, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('AdministrarCategorias/form_footer', array('categoria' => $categoria, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <?php include_partial('AdministrarCategorias/themeswitcher') ?>
</div>
