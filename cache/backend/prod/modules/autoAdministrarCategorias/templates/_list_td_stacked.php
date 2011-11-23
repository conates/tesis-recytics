<td colspan="4">
  <?php echo __('%%id%% - %%nombre_categoria%% - %%descripcion%% - %%tipo%%', array('%%id%%' => link_to($categoria->getId(), 'categoria_edit', $categoria), '%%nombre_categoria%%' => $categoria->getNombreCategoria(), '%%descripcion%%' => $categoria->getDescripcion(), '%%tipo%%' => $categoria->getTipo()), 'messages') ?>
</td>
