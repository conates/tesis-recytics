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
    <th>id</th>
    <th>Monto</th>
    <th>Fecha</th>

</thead>
<tbody>

    <?php foreach ($data as $row): ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['monto']?></td>
            <td><?php echo $row['fecha'] ?></td>

        </tr>
    <?php endforeach ?>

</tbody>
</table>