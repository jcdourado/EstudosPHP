<!DOCTYPE html>
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

        <label>
          Descrição (Opcional):
          <textarea name="descricao"></textarea>
        </label>

        <label>
          Prazo (Opcional):
          <input type="date" name="prazo" >
        </label>
        <fieldset>

          <legend>Prioridade:</legend>
          <label>
            <input type="radio" name="prioridade" value="1" checked> Baixa
            <input type="radio" name="prioridade" value="2"> Media
            <input type="radio" name="prioridade" value="3"> Alta
          </label>
        </fieldset>

        <label>
          Tarefa Concluida:
          <input type="checkbox" name="concluida" value="1">
        </label>

        <input type="submit" value="Cadastrar">
      </fieldset>
    </form>

     <table>
       <tr>
         <th>Tarefa</th>
         <th>Descricao</th>
         <th>Prazo</th>
         <th>Prioridade</th>
         <th>Concluida</th>
       </tr>
       <?php
        foreach($lista_tarefas as $tarefa) : ?>
         <tr>
           <td><?php echo $tarefa['nome']; ?></td>
           <td><?php echo $tarefa['descricao']; ?></td>
           <td><?php echo traduz_exibir($tarefa['prazo']); ?></td>
           <td><?php echo traduz_prioridade($tarefa['prioridade']); ?></td>
           <td><?php echo traduz_concluida($tarefa['concluida']); ?></td>
         </tr>
       <?php endforeach;?>

     </table>

  </body>
</html>
