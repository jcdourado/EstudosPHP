<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Contatos</title>
  </head>
  <body>
    <h1>Lista de Contatos</h1>
    <form>
      <fieldset>
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Insira seu nome">

        <label>Telefone:</label>
        <input type="number" name="telefone" placeholder="00000000">

        <label>E-mail:</label>
        <input type="email" name="email" placeholder="example@example.com">

        <label>Descrição</label>
        <textarea name="descricao"></textarea>

        <label>Data de nascimento</label>
        <input type="date" name="nascimento">

        <label>Favorito</label>
        <input type="checkbox" name="favorito" value="sim">

        <input type="submit" value="Enviar">
      </fieldset>
    </form>
    <h3>Contatos cadastrados:</h3>

    <table>
      <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>E-mail</th>
        <th>Descrição</th>
        <th>Nascimento</th>
        <th>Favorito</th>
      </tr>
      <?php foreach ($lista_contatos as $contato) : ?>
        <tr>
          <td><?php echo $contato['nome']; ?></td>
          <td><?php echo $contato['telefone']; ?></td>
          <td><?php echo $contato['email']; ?></td>
          <td><?php echo $contato['descricao']; ?></td>
          <td><?php echo $contato['nascimento']; ?></td>
          <td><?php echo $contato['favorito']; ?></td>
        </tr>
      <?php endforeach;?>

    </table>

  </body>
</html>
