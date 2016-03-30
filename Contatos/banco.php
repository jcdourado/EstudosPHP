<?php
$bdLocal = '127.0.0.1';
$bdUser = 'jcdourado';
$bdSenha = '12345678';
$bdBanco = 'contatos';

$conexao = mysqli_connect($bdLocal,$bdUser,$bdSenha,$bdBanco);

if(mysqli_connect_errno($conexao)){
  echo "Erro na conexão com o BD contatos";
  die();
}

function gravar_contato($conexao,$contato){
  $sql = "INSERT INTO contatos(nome,email,descricao,nascimento,favorito,telefone) VALUES
  ('{$contato['nome']}',
   '{$contato['email']}',
   '{$contato['descricao']}',
   '{$contato['nascimento']}',
   {$contato['favorito']},
   '{$contato['telefone']}'
   )";

  mysqli_query($conexao,$sql);
}

function buscar_todos_contatos($conexao){
  $sql = "SELECT * FROM contatos";

  $result = mysqli_query($conexao,$sql);

  $contatos = array();

  while ($contato = mysqli_fetch_assoc($result)) {
    $contatos[] = $contato;
  }

  return $contatos;
}

function apagar_contato($conexao,$id){
  $sql = "DELETE FROM contatos WHERE id = {$id}";

  mysqli_query($conexao,$sql);
}

 ?>
