<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gerenciador de Tarefas</title>
  </head>
  <body>
    <h1>Gerenciador de Tarefas</h1>


    <?php include('formulario.php'); ?>

    <?php if($exibir_tarefa) : ?>
          <?php include('tabela.php'); ?>
    <?php endif; ?>

  </body>
</html>
