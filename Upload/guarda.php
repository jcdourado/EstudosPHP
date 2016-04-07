<?php

  function guardarArq($arq){
    return move_uploaded_file($arq['tmp_name'],"Arquivos/{$arq['name']}");
  }


 ?>
