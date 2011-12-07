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
    <th>Categoria</th>
    <th>Tipo</th>
    <th>Marca</th>
    <th>Detalle</th>
    <th>Cantidad</th>
</thead>
<tbody>

    <?php foreach ($data as $row): ?>
        <tr>
            <td><?php echo $row['categoria'] ?></td>
            <td><?php echo $row['Categoria']['tipo'] ?></td>
            <td><?php echo $row['marca'] ?></td>
            <td><?php echo $row['detalle'] ?></td>
            <td><?php echo $row['cantidad'] ?></td>
        </tr>
    <?php endforeach ?>

</tbody>
</table>