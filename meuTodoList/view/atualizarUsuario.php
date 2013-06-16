<?php include_once 'template/header.php'; ?>

<?php
include_once '../biblioteca/IncludeFile.php';
IncludeFile::load('aplicacao/Facade');

$facade = new Facade();

$facade->atualizarUsuario();

// � realizado a busca do usu�rio pelo ID que � passado via $_GET
$usuario = $facade->buscarUsuarioPorId();

// Notem que a a��o (action) do formul�rio ir� encaminhar os dados por POST para mesma p�gina,
// fazendo com que m�todo chamada pelo Facade capture as informa��o e realize o atualiza��o no BD
?>

<h1>Atualizar Usu�rio</h1>

<form method="post" name="form" action="atualizarUsuario.php">
<fieldset>
<label>Email:</label>
<input type="text" name="email" title="Email" value="<?php echo $usuario->getEmail(); ?>">

<label>Senha:</label>
<input type="password" name="senha" title="Senha" value="<?php echo $usuario->getSenha(); ?>">
<br>

<input type="hidden" name="id" value="<?php echo $usuario->getId(); ?>">
<input type="submit" name="AtualizarUsuario" value="Salvar" class="btn btn-success">
<a href="index.php" class="btn">Voltar</a>

</fieldset>

</form>

<?php include_once 'template/footer.php'; ?>
