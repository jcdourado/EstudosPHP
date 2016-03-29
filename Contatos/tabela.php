<h3>Contatos cadastrados:</h3>

<table border=1>
  <tr>
    <th>Nome</th>
    <th>Telefone</th>
    <th>E-mail</th>
    <th>Descrição</th>
    <th>Nascimento</th>
    <th>Favorito</th>
    <th>Opções</th>
  </tr>
  <?php foreach ($lista_contatos as $contato) : ?>
    <tr>
      <td><?php echo $contato['nome']; ?></td>
      <td><?php echo $contato['telefone']; ?></td>
      <td><?php echo $contato['email']; ?></td>
      <td><?php echo $contato['descricao']; ?></td>
      <td><?php echo data_exibir($contato['nascimento']); ?></td>
      <td><?php echo trata_favorito($contato['favorito']); ?></td>
      <td><a href="excluir.php?id=<?php echo $contato['id']; ?>">Excluir</a></td>
    </tr>
  <?php endforeach;?>

</table>
