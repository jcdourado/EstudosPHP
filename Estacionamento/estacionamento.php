<?php
include 'banco.php';
include 'helper.php';

if(isset($_GET['placa']) && $_GET['placa'] != ''){
      $veiculo = array();
      $veiculo['placa'] = $_GET['placa'];

      if(isset($_GET['marca'])){
        $veiculo['marca'] = $_GET['marca'];
      } else{
        $veiculo['marca'] = '';
      }

      if(isset($_GET['modelo'])){
        $veiculo['modelo'] = $_GET['modelo'];
      } else{
        $veiculo['modelo'] = '';
      }

      if(isset($_GET['hora_entrada']) && $_GET['hora_entrada'] != ''){
        $veiculo['hora_entrada'] = $_GET['hora_entrada'];
      } else{
        $veiculo['hora_entrada'] = '00:00';
      }

      if(isset($_GET['hora_saida']) && $_GET['hora_saida'] != ''){
        $veiculo['hora_saida'] = $_GET['hora_saida'];
      }else{
        $veiculo['hora_saida'] = '00:00';
      }

      gravar_veiculo($conexao,$veiculo);
      header('Location: estacionamento.php');
      die();
}

$lista_veiculos = array();

$lista_veiculos = buscar_todos_veiculos($conexao);
$exibe_tabela = true;

include "template.php";
?>
