<form>
  <fieldset>
    <input type='hidden' name ='id' value="<?php echo $contato['id']; ?>"></input>

    <label>Nome:</label>
    <input type="text" name="nome" placeholder="Insira seu nome" value="<?php echo $contato['nome']; ?>">

    <label>Telefone:</label>
    <input type="number" name="telefone" placeholder="00000000" value="<?php echo $contato['telefone']; ?>">

    <label>E-mail:</label>
    <input type="email" name="email" placeholder="example@example.com" value ="<?php echo $contato['email']; ?>" autocomplete>

    <label>Descrição</label>
    <textarea name="descricao"><?php echo $contato['descricao']; ?></textarea>

    <label>Data de nascimento</label>
    <input type="date" name="nascimento" value="<?php echo $contato['nascimento']; ?>">

    <label>Favorito</label>
    <input type="checkbox" name="favorito" value="1" <?php echo ($contato['favorito']) ? 'checked' : ''; ?>>

    <input type="submit" value="<?php if(isset($_GET['id']) && $_GET['id'] > 0) { ?> Alterar <?php }else { ?> Enviar <?php } ?>">
  </fieldset>
</form>
