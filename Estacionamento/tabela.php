<fieldset>
  <form method="post">
    <legend>Digite uma hora:</legend>
    <input type="time" name='horaProcurada'></input>
    <input type="submit" value="Procurar"></input>
    <a href="estacionamento.php?exi=0">Exibir todos</a>
  </form>
</fieldset>

<h3>Lista de veiculos cadastrados:</h3>

<table border="1">
  <tr>
    <th>Placa</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Hora de entrada</th>
    <th>Hora de saida</th>
    <th>Opções</th>
  </tr>
  <?php foreach($lista_veiculos as $veiculo) : ?>
    <tr>
      <td><?php echo $veiculo['placa']; ?></td>
      <td><?php echo $veiculo['marca'];?></td>
      <td><?php echo $veiculo['modelo']; ?></td>
      <td><?php echo hora_exibir($veiculo['hora_entrada']); ?></td>
      <td><?php echo hora_exibir($veiculo['hora_saida']); ?></td>
      <td><a href="remover.php?id=<?php echo $veiculo['id']; ?>">Excluir</a></td>
    </tr>
  <?php endforeach; ?>
</table>
