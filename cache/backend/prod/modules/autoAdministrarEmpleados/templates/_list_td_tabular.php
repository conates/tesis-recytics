<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($empleado->getId(), 'empleado_edit', $empleado) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_rut">
  <?php echo $empleado->getRut() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nombres">
  <?php echo $empleado->getNombres() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_apellidos">
  <?php echo $empleado->getApellidos() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $empleado->getEmail() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_fecha_nac">
  <?php echo false !== strtotime($empleado->getFechaNac()) ? format_date($empleado->getFechaNac(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_direccion">
  <?php echo $empleado->getDireccion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_ciudad_residencia">
  <?php echo $empleado->getCiudadResidencia() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_telefono">
  <?php echo $empleado->getTelefono() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_fecha_contrato">
  <?php echo false !== strtotime($empleado->getFechaContrato()) ? format_date($empleado->getFechaContrato(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_fecha_fin_contrato">
  <?php echo false !== strtotime($empleado->getFechaFinContrato()) ? format_date($empleado->getFechaFinContrato(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_sueldo">
  <?php echo $empleado->getSueldo() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_user_id">
  <?php echo $empleado->getUserId() ?>
</td>
