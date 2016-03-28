<?php
  session_start();

  include 'helpers.php';
  include 'banco.php';

  if(isset($_GET['nome']) && $_GET['nome'] != ''){
    $tarefa = array();

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

    // QUANDO UM CHECKBOX NAO É MARCADO, ELE NÃO É ENVIADO PELO NAVEGADOR
    
    if(isset($_GET['concluida'])){
      $tarefa['concluida'] = 1;
    } else {
      $tarefa['concluida'] = 0;
    }

    gravar_tarefa($conexao,$tarefa);
  }

    $lista_tarefas = buscar_tarefas($conexao);

  include "template.php";
 ?>
