<?php
  function traduz_prioridade($codigo){
    $prioridade ='';

    switch ($codigo) {
      case 1: $prioridade = 'Baixa';
        break;
      case 2: $prioridade = 'Média';
        break;
      case 3: $prioridade = 'Alta';
        break;
    }

    return $prioridade;
  }

  function traduz_exibir($data){
    if($data == "" || $data == "0000-00-00"){
      return '';
    }
    $dados = explode("-",$data);
    $exibe = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

    return $exibe;
  }

  function traduz_banco($data){
    if($data == "" || $data == "00/00/0000"){
      return '';
    }
    $dados = explode("/",$data);
    $exibe = "{$dados[2]}-{$dados[1]}-{$dados[0]}";

    return $exibe;
  }

  function traduz_concluida($concluida){
    if($concluida == 1){
      return 'Sim';
    }
    return 'Não';
  }

 ?>
