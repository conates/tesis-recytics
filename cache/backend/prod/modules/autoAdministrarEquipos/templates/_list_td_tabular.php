<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($equipo->getId(), 'equipo_edit', $equipo) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_origen">
  <?php echo $equipo->getOrigen() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_marca">
  <?php echo $equipo->getMarca() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_peso">
  <?php echo $equipo->getPeso() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_estado">
  <?php echo get_partial('AdministrarEquipos/list_field_boolean', array('value' => $equipo->getEstado())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_detalle">
  <?php echo $equipo->getDetalle() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_user_id">
  <?php echo $equipo->getUserId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_categoria_id">
  <?php echo $equipo->getCategoriaId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_empleado_id">
  <?php echo $equipo->getEmpleadoId() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_venta_equipo_id">
  <?php echo $equipo->getVentaEquipoId() ?>
</td>
