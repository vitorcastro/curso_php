<?php include_once 'template/header.php'; ?>

<?php 
	
include_once '../persistencia/conexaoBaseDados.php';

$sql = 'SELECT * FROM usuario WHERE id="' . $_GET['id'] . '";';	

$query = mysql_query($sql);

if ($query)
{
	$object = mysql_fetch_object($query);
	
}else
	header("Location: visualizarTodosUsuario.php");
?>


<h1>Atualizar Usuário</h1>

<form method="post" name="form" action="processaAtualizarUsuario.php">
<fieldset>
<label>Email:</label>
<input type="text" name="email" title="Email" value="<?php echo $object->email; ?>">

<label>Senha:</label>
<input type="password" name="senha" title="Senha" value="<?php echo $object->senha; ?>">

<br>

<input type="hidden" name="id" value="<?php echo $object->id; ?>">
<input type="submit" name="AtualizarUsuario" value="Salvar" class="btn btn-success">
<a href="index.php" class="btn">Voltar</a>

</fieldset>

</form>

<?php include_once 'template/footer.php'; ?>
