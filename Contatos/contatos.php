<?php
session_start();
if(isset($_GET['nome']) && $_GET['nome'] != ''){
      $contato = array();
      $contato['nome'] = $_GET['nome'];
      $contato['telefone'] = $_GET['telefone'];
      $contato['email'] = $_GET['email'];
      $contato['descricao'] = $_GET['descricao'];
      $contato['nascimento'] = $_GET['nascimento'];
      $contato['favorito'] = $_GET['favorito'];
      $_SESSION['lista_contatos'][] = $contato;
}

$lista_contatos = array();

if(isset($_SESSION['lista_contatos'])){
  $lista_contatos = $_SESSION['lista_contatos'];
}

include "ListaContatosCap4.php"
?>
