<?php
  $bdServer = '127.0.0.1';
  $bdUser = 'jcdourado';
  $bdSenha = '12345678';
  $bdBanco = 'tarefas';

  $conexao = mysqli_connect($bdServer,$bdUser,$bdSenha,$bdBanco);

  if(mysqli_connect_errno($conexao)){ // se der erro na conexao
    echo "Problemas para conectar no banco";
    die(); // mata o programa
  }


  function buscar_tarefas($conexao){
    $sqlBusca = 'SELECT * FROM tarefas';
    $result = mysqli_query($conexao,$sqlBusca); //busca

    $tarefas = array();

    while($tarefa = mysqli_fetch_assoc($result)){ // cada row da consulta
      $tarefas[] = $tarefa;
    }

    return $tarefas;
  }

  function gravar_tarefa($conexao,$tarefa){
    $sqlInsert = "INSERT INTO tarefas(nome,descricao,prioridade,prazo,concluida) VALUES
      ('{$tarefa['nome']}',
      '{$tarefa['descricao']}',
      {$tarefa['prioridade']},
      '{$tarefa['prazo']}',
      {$tarefa['concluida']}
    )";

    mysqli_query($conexao,$sqlInsert);
   }
 ?>
