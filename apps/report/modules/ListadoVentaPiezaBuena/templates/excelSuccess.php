<style>
  table{
    font-family: Helvetica, Arial, sans-serif;
  }
  th, td{
    text-align: left;
    border: 1px solid;
  }
</style>
<table>
    <thead>
    <th>Monto</th>
    <th>Cliente</th>
    <th>Tipo</th>
    <th>Fecha</th>
</thead>
<tbody>

    <?php foreach ($data as $row): ?>
        <tr>
            <td><?php echo $row['monto'] ?></td>
            <td><?php echo $row['cliente'] ?></td>
            <td><?php echo $row['tipo'] ?></td>
            <td><?php echo $row['fecha'] ?></td>
        </tr>
    <?php endforeach ?>

</tbody>
</table>