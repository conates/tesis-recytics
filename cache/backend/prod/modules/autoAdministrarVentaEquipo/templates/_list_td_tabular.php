<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($ventaequipo->getId(), 'ventaequipo_edit', $ventaequipo) ?>
</td>
<td class="sf_admin_date sf_admin_list_td_fecha">
  <?php echo false !== strtotime($ventaequipo->getFecha()) ? format_date($ventaequipo->getFecha(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_tipo">
  <?php echo $ventaequipo->getTipo() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_monto">
  <?php echo $ventaequipo->getMonto() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_detalle">
  <?php echo $ventaequipo->getDetalle() ?>
</td>
