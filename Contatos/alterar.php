<?php
include 'banco.php';
include 'helper.php';

if(isset($_GET['nome']) && $_GET['nome'] != ''){
      $contato = array();

      $contato['id'] = $_GET['id'];
      $contato['nome'] = $_GET['nome'];

      if(isset($_GET['telefone'])){
        $contato['telefone'] = $_GET['telefone'];
      } else{
        $contato['telefone'] = '';
      }

      if(isset($_GET['email'])){
        $contato['email'] = $_GET['email'];
      } else{
        $contato['email'] = '';
      }

      if(isset($_GET['descricao'])){
        $contato['descricao'] = $_GET['descricao'];
      } else{
        $contato['descricao'] = '';
      }

      if(isset($_GET['nascimento'])){
        $contato['nascimento'] = valida_data($_GET['nascimento']);
      } else{
        $contato['nascimento'] = '0000-00-00';
      }

      if(isset($_GET['favorito'])){
        $contato['favorito'] = $_GET['favorito'];
      }else{
        $contato['favorito'] = 0;
      }

      editar_contato($conexao,$contato);
      header('Location: contatos.php');
      die();
}

$exibe_tabela = false;

$contato = buscar_contato($conexao,$_GET['id']);

include "template.php";
?>
