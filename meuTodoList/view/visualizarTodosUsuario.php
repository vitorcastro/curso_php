<?php include_once 'template/header.php'; ?>

<h1>Visualizar Todos os Usuário</h1>

<a href="novoUsuario.php" class="btn btn-primary"><i class="icon-user icon-white"></i> Novo Usuário</a>
<br>


<?php 
include_once '../persistencia/conexaoBaseDados.php';  

$sql = 'SELECT * FROM usuario';

$query = mysql_query($sql,$conexao);

$afetadas = mysql_num_rows($query);

if ($afetadas <> 0)
{
	for ($linha=0;$linha<$afetadas;$linha++)
	{
		$pont = mysql_data_seek($query,$linha);
		$res = mysql_fetch_object($query);
		$usuarios[$linha] = $res;
	}
}else
	$usuarios = false;
?>


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
		<td><?php echo $usuario->email; ?></td>
		<td><?php echo $usuario->senha; ?></td>
		<td><a class="btn btn-inverse" href="atualizarUsuario.php?id=<?php echo $usuario->id; ?>"><i class="icon-edit icon-white"></i></a></td>
		<td><a class="btn btn-danger" href="processaExcluirUsuario.php?id=<?php echo $usuario->id; ?>"><i class="icon-remove icon-white"></i></a></td>
		
	</tr>
	
	<?php }  ?>
	
</table>
<br>
<?php } else { ?>
	<div class="alert alert-block" style="margin-top: 10px;">Não Existem Usuário Cadastrados</div>

<?php } ?>

<hr>

<a href="index.php" class="btn">Voltar</a>





<?php include_once 'template/footer.php'; ?>