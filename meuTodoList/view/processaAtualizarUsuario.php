<?php
include_once '../persistencia/UsuarioDao.php';
include_once '../entidade/Usuario.php';
include_once '../biblioteca/Redirect.php';


if (isset($_POST['AtualizarUsuario']))
{
	$usuario = new Usuario();
	$usuario->setId($_POST['id']);
	$usuario->setEmail($_POST['email']);
	$usuario->setSenha($_POST['senha']);
	
	$usuarioDao = new UsuarioDao();
	$atualizar = $usuarioDao->atualizar($usuario);
	
	if ($atualizar)
		Redirect::to('visualizarTodosUsuario');
	else
		Redirect::to('index');
	
	// UPDATE <tabela> SET [<coluna = valor>,] WHERE [<coluna = value>]
// 	$sql = 'UPDATE usuario SET 
// 				email = "' . $_POST['email'] . '", 
// 				senha = "' . $_POST['senha'] . '" 
// 				WHERE id = "' . $_POST['id'] . '";';
	
// 	$conexao = new Conexao();

// // 	$query = mysql_query($sql);
// // 	fecharConexao($conexao);

// 	if ($conexao->executeQuery($sql))
// 	{
// 		header("Location: visualizarTodosUsuario.php");
// 	}else
// 		header("Location: index.php");
}

?>