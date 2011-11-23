<td colspan="5">
  <?php echo __('%%id%% - %%fecha%% - %%tipo%% - %%monto%% - %%detalle%%', array('%%id%%' => link_to($ventaequipo->getId(), 'ventaequipo_edit', $ventaequipo), '%%fecha%%' => false !== strtotime($ventaequipo->getFecha()) ? format_date($ventaequipo->getFecha(), "f") : '&nbsp;', '%%tipo%%' => $ventaequipo->getTipo(), '%%monto%%' => $ventaequipo->getMonto(), '%%detalle%%' => $ventaequipo->getDetalle()), 'messages') ?>
</td>
