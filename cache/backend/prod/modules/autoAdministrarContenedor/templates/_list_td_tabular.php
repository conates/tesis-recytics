<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($container->getId(), 'container_edit', $container) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_capacidad">
  <?php echo $container->getCapacidad() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_tipo">
  <?php echo $container->getTipo() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_venta_chatarra_id">
  <?php echo $container->getVentaChatarraId() ?>
</td>
