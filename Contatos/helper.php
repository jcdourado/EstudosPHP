<?php
  function data_exibir($data){
    if($data == '' || $data == "0000-00-00"){
      return '';
    }
    $dados = explode("-",$data);
    $data = "{$dados[2]}/{$dados[1]}/{$dados[0]}";
    return $data;
  }

  function valida_data($data){
    if($data == ''){
      return '0000-00-00';
    }
    return $data;
  }

  function trata_favorito($favorito){
    if($favorito == 1){
      return "Sim";
    }
    return "Não";
  }

 ?>
