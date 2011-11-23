<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($pieza->getId(), 'pieza_edit', $pieza) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_marca">
  <?php echo $pieza->getMarca() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_estado">
  <?php echo get_partial('AdministrarPiezas/list_field_boolean', array('value' => $pieza->getEstado())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_detalle">
  <?php echo $pieza->getDetalle() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_user_id">
  <?php echo $pieza->getUserId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_categoria_id">
  <?php echo $pieza->getCategoriaId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_empleado_id">
  <?php echo $pieza->getEmpleadoId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_container_id">
  <?php echo $pieza->getContainerId() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_venta_pieza_id">
  <?php echo $pieza->getVentaPiezaId() ?>
</td>
