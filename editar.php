<?php
  session_start();

  include 'banco.php';
  include 'helpers.php';

  $exibir_tarefa = false;

  if(isset($_GET['nome']) && $_GET['nome'] != ''){
    $tarefa = array();

    $tarefa['id'] = $_GET['id'];

    $tarefa['nome'] = $_GET['nome'];

    if(isset($_GET['descricao'])){
      $tarefa['descricao'] = $_GET['descricao'];
    } else {
      $tarefa['descricao'] = '';
    }

    if(isset($_GET['prazo'])){
      $tarefa['prazo'] = $_GET['prazo'];
    } else {
      $tarefa['prazo'] = '';
    }

    $tarefa['prioridade'] = $_GET['prioridade'];

    if(isset($_GET['concluida'])){
      $tarefa['concluida'] = 1;
    }
    else{
      $tarefa['concluida'] = 0;
    }

    editar_tarefa($conexao, $tarefa);
    header('Location: tarefas.php'); // Para redirecionar!
    die();
  }

  $tarefa = buscar_tarefa($conexao, $_GET['id']);

  include "template.php";
 ?>
