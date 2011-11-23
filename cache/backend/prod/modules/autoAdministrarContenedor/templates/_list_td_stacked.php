<td colspan="4">
  <?php echo __('%%id%% - %%capacidad%% - %%tipo%% - %%venta_chatarra_id%%', array('%%id%%' => link_to($container->getId(), 'container_edit', $container), '%%capacidad%%' => $container->getCapacidad(), '%%tipo%%' => $container->getTipo(), '%%venta_chatarra_id%%' => $container->getVentaChatarraId()), 'messages') ?>
</td>
