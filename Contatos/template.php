<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Contatos</title>
  </head>
  <body>
    <h1>Lista de Contatos</h1>
    <?php include 'formulario.php'; ?>

    <?php if($exibe_tabela) : ?>
      <?php include 'tabela.php'; ?>
    <?php endif; ?>

  </body>
</html>
