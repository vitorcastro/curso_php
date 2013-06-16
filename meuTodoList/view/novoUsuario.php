<?php include_once 'template/header.php'; ?>

<?php 
include_once '../biblioteca/IncludeFile.php';
IncludeFile::load('aplicacao/Facade');

$facade = new Facade();
$facade->salvarUsuario();

// Notem que a ação (action) do formulário irá encaminhar os dados por POST para mesma página,
// fazendo com que método chamada pelo Facade capture as informação e realize o cadastro no BD 
?>


<h1>Novo Usuário</h1>

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
