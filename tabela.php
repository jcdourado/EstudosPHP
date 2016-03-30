<a href="dml.php?op=2">Apagar todas as tarefas</a>
<table>
  <tr>
    <th>Tarefa</th>
    <th>Descricao</th>
    <th>Prazo</th>
    <th>Prioridade</th>
    <th>Concluida</th>
    <th>Opções</th>
  </tr>
  <?php
   foreach($lista_tarefas as $tarefa) : ?>
    <tr>
      <td><?php echo $tarefa['nome']; ?></td>
      <td><?php echo $tarefa['descricao']; ?></td>
      <td><?php echo traduz_exibir($tarefa['prazo']); ?></td>
      <td><?php echo traduz_prioridade($tarefa['prioridade']); ?></td>
      <td><?php echo traduz_concluida($tarefa['concluida']); ?></td>
      <td><a href="dml.php?id=<?php echo $tarefa['id']; ?>&op=3">Editar</a>
        <a href="remover.php?id=<?php echo $tarefa['id']; ?>&op=4">Remover</a>
        <a href="duplicar.php?id=<?php echo $tarefa['id']; ?>&op=1">Duplicar</a>
      </td>
    </tr>

  <?php endforeach;?>

</table>
