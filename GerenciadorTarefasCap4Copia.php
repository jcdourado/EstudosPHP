<!DOCTYPE html>
<?php session_start(); ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gerenciador de Tarefas</title>
  </head>
  <body>
    <h1>Gerenciador de Tarefas</h1>
    <form>
      <fieldset>
        <legend>Nova tarefa</legend>
        <label>
          Tarefa:
          <input type="text" name="nome">
        </label>
        <input type="submit" value="Cadastrar">
      </fieldset>
    </form>

    <?php
      $lista_tarefas = "";
      if (isset($_COOKIE['lista_tarefas'])) {
        $lista_tarefas = $_COOKIE['lista_tarefas'];
      }
      echo $lista_tarefas;

      if(isset($_GET['nome'])){
        array_push($lista_tarefas,$_GET['nome']);
        $string = "";
        foreach ($lista_tarefas as $tarefa) {
          $string = $string . $tarefa;
        }
        echo $string;
        setcookie('lista_tarefas',$string);
      }
     ?>

     <table>
       <tr>
         <th>Tarefas</th>
       </tr>

       <?php foreach($lista_tarefas as $tarefa) : ?>
         <tr>
           <td><?php echo $tarefa; ?></td>
         </tr>
       <?php endforeach; ?>

     </table>

  </body>
</html>
