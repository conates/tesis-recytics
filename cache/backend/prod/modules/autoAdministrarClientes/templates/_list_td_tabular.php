<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($cliente->getId(), 'cliente_edit', $cliente) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_rut">
  <?php echo $cliente->getRut() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_razon_social">
  <?php echo $cliente->getRazonSocial() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_giro">
  <?php echo $cliente->getGiro() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nombre_representante">
  <?php echo $cliente->getNombreRepresentante() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_direccion">
  <?php echo $cliente->getDireccion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_telefono_contacto">
  <?php echo $cliente->getTelefonoContacto() ?>
</td>
