<h3>Contatos cadastrados:</h3>

<form>
  <?php if(isset($_GET['listar']) && $_GET['listar'] == 1) { ?>
     <a href="contatos.php?listar=0">Listar todos:</a>
  <?php } else{ ?>
    <a href="contatos.php?listar=1">Listar favoritos:</a>
  <?php } ?>

</form>

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
  <?php
  if(isset($_GET['listar']) && $_GET['listar'] == 1){
    $lista_contatos2 = [];
    foreach ($lista_contatos as $contato) {
      if($contato['favorito'] == 1){
        $lista_contatos2[] = $contato;
      }
    }
    $lista_contatos = $lista_contatos2;
  }
  foreach ($lista_contatos as $contato) : ?>
    <tr>
      <td><?php echo $contato['nome']; ?></td>
      <td><?php echo $contato['telefone']; ?></td>
      <td><?php echo $contato['email']; ?></td>
      <td><?php echo $contato['descricao']; ?></td>
      <td><?php echo data_exibir($contato['nascimento']); ?></td>
      <td><?php echo trata_favorito($contato['favorito']); ?></td>
      <td><a href="alterar.php?id=<?php echo $contato['id']; ?>">Alterar</a>
        <a href="excluir.php?id=<?php echo $contato['id']; ?>">Excluir</a></td>
    </tr>
  <?php endforeach;?>

</table>
