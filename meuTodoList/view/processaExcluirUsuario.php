<?php
include_once '../persistencia/UsuarioDao.php';
include_once '../entidade/Usuario.php';
include_once '../biblioteca/Redirect.php';

if (isset($_GET['id']))
{
	$usuarioDao = new UsuarioDao();

	$excluir = $usuarioDao->excluirPorId($_GET['id']);

	if ($excluir)
		Redirect::to('visualizarTodosUsuario');
	else
		Redirect::to('index');
}

// include_once '../persistencia/conexaoBaseDados.php';

// DELETE [<tabela>] FROM <tabela> WHERE [<campo = value>,] AND, OR
// $sql = 'DELETE FROM usuario WHERE id = "' . $_GET['id'] . '";';
// $query = mysql_query($sql);

// fecharConexao($conexao);

// if ($query)
// {
// 	header("Location: visualizarTodosUsuario.php");
// }else
// 	header("Location: index.php");




	

?>