<?php
  include 'banco.php';

  apagar_contato($conexao,$_GET['id']);

  header('Location: contatos.php');
  die();

 ?>
