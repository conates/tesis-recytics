<td colspan="7">
  <?php echo __('%%id%% - %%fecha%% - %%tipo%% - %%monto%% - %%detalle%% - %%cliente%% - %%gastos_envio%%', array('%%id%%' => link_to($ventapieza->getId(), 'ventapieza_edit', $ventapieza), '%%fecha%%' => false !== strtotime($ventapieza->getFecha()) ? format_date($ventapieza->getFecha(), "f") : '&nbsp;', '%%tipo%%' => $ventapieza->getTipo(), '%%monto%%' => $ventapieza->getMonto(), '%%detalle%%' => $ventapieza->getDetalle(), '%%cliente%%' => $ventapieza->getCliente(), '%%gastos_envio%%' => $ventapieza->getGastosEnvio()), 'messages') ?>
</td>
