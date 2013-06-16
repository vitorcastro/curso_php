<?php include_once 'template/header.php'; ?>

<?php
include_once '../biblioteca/IncludeFile.php';
IncludeFile::load('aplicacao/Facade');

$facade = new Facade();

$facade->atualizarUsuario();

// é realizado a busca do usuário pelo ID que é passado via $_GET
$usuario = $facade->buscarUsuarioPorId();

// Notem que a ação (action) do formulário irá encaminhar os dados por POST para mesma página,
// fazendo com que método chamada pelo Facade capture as informação e realize o atualização no BD
?>

<h1>Atualizar Usuário</h1>

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
