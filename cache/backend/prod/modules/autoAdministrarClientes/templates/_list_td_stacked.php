<td colspan="7">
  <?php echo __('%%id%% - %%rut%% - %%razon_social%% - %%giro%% - %%nombre_representante%% - %%direccion%% - %%telefono_contacto%%', array('%%id%%' => link_to($cliente->getId(), 'cliente_edit', $cliente), '%%rut%%' => $cliente->getRut(), '%%razon_social%%' => $cliente->getRazonSocial(), '%%giro%%' => $cliente->getGiro(), '%%nombre_representante%%' => $cliente->getNombreRepresentante(), '%%direccion%%' => $cliente->getDireccion(), '%%telefono_contacto%%' => $cliente->getTelefonoContacto()), 'messages') ?>
</td>
