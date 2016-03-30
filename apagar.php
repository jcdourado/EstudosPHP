<?php
  include 'banco.php';

  remover_todas_tarefas($conexao);

  header('Location: tarefas.php');
  die();
 ?>
