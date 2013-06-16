<?php include_once 'template/header.php'; ?>

<?php 
include_once '../biblioteca/IncludeFile.php';
IncludeFile::load('aplicacao/Facade');

$facade = new Facade();
$facade->salvarUsuario();

// Notem que a a��o (action) do formul�rio ir� encaminhar os dados por POST para mesma p�gina,
// fazendo com que m�todo chamada pelo Facade capture as informa��o e realize o cadastro no BD 
?>


<h1>Novo Usu�rio</h1>

<form method="post" name="form" action="novoUsuario.php">
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
