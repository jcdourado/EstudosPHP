<?php
  session_start();

  include 'banco.php';
  include 'helpers.php';

  // mysqli_real_escape_string -> proteger de SQL Injections


  $exibir_tarefa = false;

  $tem_erros = false;

  $erros_validacao = array();

  if(tem_post()){
    $tarefa = array();

    $tarefa['id'] = $_POST['id'];

    if(isset($_POST['nome']) && strlen($_POST['nome']) > 0){
       $tarefa['nome'] = $_POST['nome'];
    }
    else{
      $tem_erros = true;
      $erros_validacao['nome'] = "O nome da tarefa é obrigatorio";
    }

    if(isset($_POST['descricao'])){
      $tarefa['descricao'] = $_POST['descricao'];
    } else {
      $tarefa['descricao'] = '';
    }

    if(isset($_POST['prazo'])){
      $tarefa['prazo'] = $_POST['prazo'];
    } else {
      $tarefa['prazo'] = '';
    }

    $tarefa['prioridade'] = $_POST['prioridade'];

    if(isset($_POST['concluida'])){
      $tarefa['concluida'] = 1;
    }
    else{
      $tarefa['concluida'] = 0;
    }

    editar_tarefa($conexao, $tarefa);
    header('Location: tarefas.php'); // Para redirecionar!
    die();
  }

  $tarefa = buscar_tarefa($conexao, $_POST['id']);

  include "template.php";
 ?>
