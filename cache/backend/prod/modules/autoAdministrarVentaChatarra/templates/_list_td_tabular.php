<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($ventachatarra->getId(), 'ventachatarra_edit', $ventachatarra) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_monto">
  <?php echo $ventachatarra->getMonto() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_fecha">
  <?php echo false !== strtotime($ventachatarra->getFecha()) ? format_date($ventachatarra->getFecha(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_detalle">
  <?php echo $ventachatarra->getDetalle() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_tipo">
  <?php echo $ventachatarra->getTipo() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cliente_id">
  <?php echo $ventachatarra->getClienteId() ?>
</td>
