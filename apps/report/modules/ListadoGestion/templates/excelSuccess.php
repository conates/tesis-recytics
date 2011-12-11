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
    <th>Estado</th>
    <th>Marca</th>
    <th>Detalle</th>
</thead>
<tbody>

    <?php foreach ($data as $row): ?>
        <tr>
            <td><?php echo $row['estado'] ?></td>
            <td><?php echo $row['marca'] ?></td>
            <td><?php echo $row['detalle'] ?></td>

        </tr>
    <?php endforeach ?>

</tbody>
</table>