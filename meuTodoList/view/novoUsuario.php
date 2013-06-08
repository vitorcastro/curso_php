<?php include_once 'template/header.php'; ?>

<h1>Novo Usuário</h1>

<form method="post" name="form" action="processaNovoUsuario.php">
<fieldset>
<label>Email:</label>
<input type="text" name="email" title="Email">

<label>Senha:</label>
<input type="password" name="senha" title="Senha">

<br>

<input type="submit" name="NovoUsuario" value="Salvar" class="btn btn-success">
<a href="index.php" class="btn">Voltar</a>
</fieldset>

</form>

<?php include_once 'template/footer.php'; ?>
