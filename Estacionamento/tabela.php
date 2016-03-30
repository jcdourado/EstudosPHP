<h3>Lista de veiculos cadastrados:</h3>
<table border="1">
  <tr>
    <th>Placa</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Hora de entrada</th>
    <th>Hora de saida</th>
  </tr>
  <?php foreach($lista_veiculos as $veiculo) : ?>
    <tr>
      <td><?php echo $veiculo['placa']; ?></td>
      <td><?php echo $veiculo['marca'];?></td>
      <td><?php echo $veiculo['modelo']; ?></td>
      <td><?php echo hora_exibir($veiculo['hora_entrada']); ?></td>
      <td><?php echo hora_exibir($veiculo['hora_saida']); ?></td>
    </tr>
  <?php endforeach; ?>
</table>
