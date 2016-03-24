<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calendario</title>
  </head>
  <body>
<?php
    function linha($semana){
      echo "<tr>";
        for($i = 0; $i < 7 ; $i++){
          if(isset($semana[$i])){
            echo "<td";
            if($i == 0){
              echo ' style="color:red;"';
            }
            else if($i == 6){
              echo ' style="font-weight:bold;"';
            }
            if($semana[$i] == date('d')){
              echo "><strong>{$semana[$i]}</strong>";
            }
            else{
              echo ">{$semana[$i]}";
            }
            echo "</td>";
          }
          else{
            echo "<td></td>";
          }
        }
      echo "</tr>";
    }

    function calendario(){
      $dia = 1;
      $semana = array();
      while ($dia <= 31) {
        array_push($semana,$dia);

        if(count($semana) == 7){
          linha($semana);
          $semana = array();
        }

        $dia++;
      }
      linha($semana);
    }
 ?>
 <h1><?php
    $horaAtualCompleta = date('H');
    if($horaAtualCompleta >= 2 && $horaAtualCompleta < 6){
      echo "Boa Madrugada";
    }
    else if($horaAtualCompleta >= 6 && $horaAtualCompleta < 12){
      echo "Bom Dia";
    }
    else if($horaAtualCompleta >= 12 && $horaAtualCompleta < 18){
      echo "Boa Tarde";
    }
    else{
      echo "Boa Noite";
    }
  ?></h1>
    <table border="2">
      <tr>
        <th>Dom</th>
        <th>Seg</th>
        <th>Ter</th>
        <th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sab</th>
      </tr>
      <?php calendario(); ?>
    </table>
  </body>
</html>

<?php
// novo array -> array()
// isset -> ver se tá definida a variavel
// array_push -> inserir no array ?>
