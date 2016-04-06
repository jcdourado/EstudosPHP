<?php
$bdLocal = '127.0.0.1';
$bdUser = 'jcdourado';
$bdSenha = '12345678';
$bdBanco = 'estacionamento';

$conexao = mysqli_connect($bdLocal,$bdUser,$bdSenha,$bdBanco);

if(mysqli_connect_errno($conexao)){
  echo "Erro na conexão com o BD veiculos";
  die();
}

function gravar_veiculo($conexao,$veiculo){
  $sql = "INSERT INTO veiculos(placa,marca,modelo,hora_entrada,hora_saida) VALUES
  ('{$veiculo['placa']}',
   '{$veiculo['marca']}',
   '{$veiculo['modelo']}',
   '{$veiculo['hora_entrada']}',
   '{$veiculo['hora_saida']}'
   )";

  mysqli_query($conexao,$sql);
}

function buscar_todos_veiculos($conexao){
  $sql = "SELECT * FROM veiculos";

  $result = mysqli_query($conexao,$sql);

  $veiculos = array();

  while ($veiculo = mysqli_fetch_assoc($result)) {
    $veiculos[] = $veiculo;
  }

  return $veiculos;
}

function apagar_veiculo($conexao,$id){
  $sql = "DELETE FROM veiculos WHERE id = {$id}";

  mysqli_query($conexao,$sql);
}


function buscar_por_hora($conexao,$hora){
  $sql = "SELECT * FROM veiculos WHERE hora_entrada = '{$hora}'";

  $result = mysqli_query($conexao,$sql);

  $veiculos = array();

  while($veiculo = mysqli_fetch_assoc($result)){
    $veiculos[] = $veiculo;
  }

  return $veiculos;

}



 ?>
