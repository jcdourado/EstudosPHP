<?php
  function hora_exibir($hora){
    if($hora == '' || $hora == '00:00:00'){
      return '00:00';
    }
    $dados = explode(":",$hora);
    $final = "{$dados[0]}:{$dados[1]}";

    return $final;
  }
 ?>
