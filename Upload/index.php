<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload de arquivos</title>
  </head>
  <body>
    <?php

      include_once 'guarda.php';

      if(isset($_FILES['arq'])){
        if(guardarArq($_FILES['arq'])){
          echo "Guardado com sucesso!";
        }
        else{
          echo "Falha!";
        }
      }

     ?>
      <fieldset>
        <legend>Arquivos</legend>
        <form method="post" enctype="multipart/form-data">
          <label>Entre com um arquivo:</label>
          <input type="file" name="arq">
          <input type="submit" name="enviar" value="Enviar">
        </form>
      </fieldset>
  </body>
</html>
