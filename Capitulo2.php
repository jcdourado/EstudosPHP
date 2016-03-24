<?php
  echo "Hoje é dia ". date('d/m/y');
  echo " Agora são: ". date('h:i:s');
  if (date('H') > 12) {
    echo " pm ";
  }
  else{
    echo " am ";
  }

  echo "Hoje é: " . date('l');

  echo  " Faltam ". (6 - date('w')) . " dias para o sabado";

  echo " Mes: " . date('F');

  // H - Hora em 24 horas
  // h - Hora em 12 horas
  // Y - Ano completo (2016)
  // y - Ano 2 digitos (16)
?>
