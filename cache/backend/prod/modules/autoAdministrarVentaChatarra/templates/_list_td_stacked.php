<td colspan="6">
  <?php echo __('%%id%% - %%monto%% - %%fecha%% - %%detalle%% - %%tipo%% - %%cliente_id%%', array('%%id%%' => link_to($ventachatarra->getId(), 'ventachatarra_edit', $ventachatarra), '%%monto%%' => $ventachatarra->getMonto(), '%%fecha%%' => false !== strtotime($ventachatarra->getFecha()) ? format_date($ventachatarra->getFecha(), "f") : '&nbsp;', '%%detalle%%' => $ventachatarra->getDetalle(), '%%tipo%%' => $ventachatarra->getTipo(), '%%cliente_id%%' => $ventachatarra->getClienteId()), 'messages') ?>
</td>
