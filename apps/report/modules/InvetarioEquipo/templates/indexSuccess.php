<?php use_helper('I18N', 'Date') ?>
<?php include_partial('InvetarioEquipo/assets') ?>

<div id="sf_admin_container">
  <?php include_partial('InvetarioEquipo/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('InvetarioEquipo/list_header', array('pager' => $pager)) ?>
  </div>

      <div id="sf_admin_bar ui-helper-hidden" style="display:none">
      <?php include_partial('InvetarioEquipo/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
    </div>
  
  <div id="sf_admin_content">
          <form action="<?php echo url_for('equipo_collection', array('action' => 'batch')) ?>" method="post" id="sf_admin_content_form">
    
      

      <?php include_partial('InvetarioEquipo/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper, 'hasFilters' => $hasFilters)) ?>

      <ul class="sf_admin_actions">
        <?php include_partial('InvetarioEquipo/list_batch_actions', array('helper' => $helper)) ?>
      </ul>

          </form>
      </div>

  <div id="sf_admin_footer">
    <?php include_partial('InvetarioEquipo/list_footer', array('pager' => $pager)) ?>
  </div>

  <?php include_partial('InvetarioEquipo/themeswitcher') ?>
</div>
