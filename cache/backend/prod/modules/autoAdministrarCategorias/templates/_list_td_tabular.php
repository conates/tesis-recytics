<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($categoria->getId(), 'categoria_edit', $categoria) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nombre_categoria">
  <?php echo $categoria->getNombreCategoria() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_descripcion">
  <?php echo $categoria->getDescripcion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_tipo">
  <?php echo $categoria->getTipo() ?>
</td>
