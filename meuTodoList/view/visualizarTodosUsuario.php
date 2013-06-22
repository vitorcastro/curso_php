<?php include_once 'template/header.php'; ?>

<?php 
include_once '../biblioteca/IncludeFile.php';
IncludeFile::load('aplicacao/Facade');

$facade = new Facade();

$facade->excluirUsuario();

$usuarios = $facade->buscarTodosUsuario();

?>

<h1>Visualizar Todos os Usuário</h1>

<a href="novoUsuario.php" class="btn btn-primary"><i class="icon-user icon-white"></i> Novo Usuário</a>
<br>

<?php if ($usuarios) { ?>

<table class="table table-striped">
	<thead>
		<tr>
			<td>Email</td>
			<td>Senha</td>
			<td>Editar</td>
			<td>Excluir</td>
		</tr>
	</thead>
	
	<?php foreach ($usuarios as $usuario) { ?>
	<tr>
		<td><?php echo $usuario->getEmail(); ?></td>
		<td><?php echo $usuario->getSenha(); ?></td>
		<td><a class="btn btn-inverse" href="atualizarUsuario.php?id=<?php echo $usuario->getId(); ?>"><i class="icon-edit icon-white"></i></a></td>
		<td><a onclick="return confirm('Deseja excluir ?')" class="btn btn-danger" href="visualizarTodosUsuario.php?id=<?php echo $usuario->getId(); ?>"><i class="icon-remove icon-white"></i></a></td>
	</tr>
	<?php } ?>
</table>
<br>
<?php } else { ?>
	<div class="alert alert-block" style="margin-top: 10px;">Não Existem Usuário Cadastrados</div>
<?php } ?>

<hr>
<a href="index.php" class="btn">Voltar</a>

<?php include_once 'template/footer.php'; ?>