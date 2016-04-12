<?php
  // Biblioteca SPL -> padrão no PHP, possui diversas classes, interfaces para auxilio com estruturas de dados

  // php -a -> roda ele interativamente, também serve para scripts locais
    // variaveis: $argv (array com os valores) e $argc (quantos), exit(1) -> exit
    // php "arquivos" -> executa ele na linha de comandos

  // XDebuger -> debugador para diversas IDE's

  // Para trabalhar com Datas e Horarios - Classe: DateTime:
      // Metodos: createFromFormat, format, classe: DateInterval, add, sub

  // Para trabalhar com UTF-8:
    // Tem que se usar as funcoes que começam com mb_
    // mb_internal_encoding -> iniciar a codificacao em UTF-8
    // mb_http_output -> mandar para o cliente

  // PDO -> tem metodo prepare para usar o '?' e o bindValue para alterar a posição
    // query, statement, fetch

  // password_hash (cira um hash que é irrevesivel), password_verify


  // Testes: PHPUnit, Selenium
  // Testes por BDD(Comportamento): Behat, PHPSpec


 ?>
