<?php
  session_start();

  include 'helpers.php';
  include 'banco.php';

  $exibir_tarefa = true;

  if(isset($_POST['nome']) && $_POST['nome'] != ''){
    $tarefa = array();

    $tarefa['nome'] = $_POST['nome'];

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

    // QUANDO UM CHECKBOX NAO É MARCADO, ELE NÃO É ENVIADO PELO NAVEGADOR

    if(isset($_POST['concluida'])){
      $tarefa['concluida'] = 1;
    } else {
      $tarefa['concluida'] = 0;
    }

    gravar_tarefa($conexao,$tarefa);
    header('Location: tarefas.php');
    die();
  }

    $lista_tarefas = buscar_tarefas($conexao);


    $tarefa = array(
      'id' => 0,
      'nome' => '',
      'descricao' => '',
      'prazo' => '',
      'prioridade' => 1,
      'concluida' => ''
    );

  include "template.php";
 ?>
