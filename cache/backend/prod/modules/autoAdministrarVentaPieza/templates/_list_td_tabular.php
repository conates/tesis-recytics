<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($ventapieza->getId(), 'ventapieza_edit', $ventapieza) ?>
</td>
<td class="sf_admin_date sf_admin_list_td_fecha">
  <?php echo false !== strtotime($ventapieza->getFecha()) ? format_date($ventapieza->getFecha(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_tipo">
  <?php echo $ventapieza->getTipo() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_monto">
  <?php echo $ventapieza->getMonto() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_detalle">
  <?php echo $ventapieza->getDetalle() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cliente">
  <?php echo $ventapieza->getCliente() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_gastos_envio">
  <?php echo $ventapieza->getGastosEnvio() ?>
</td>
