<?php
// include_once '../persistencia/conexaoBaseDados.php';
include_once '../biblioteca/Redirect.php';
include_once '../persistencia/UsuarioDao.php';
include_once '../entidade/Usuario.php';


if (isset($_POST['Login']))
{
	$usuario = new Usuario();
	$usuario->setEmail($_POST['email']);
	$usuario->setSenha($_POST['senha']);
	
	$usuarioDao = new UsuarioDao();
	$usuarioLogin = $usuarioDao->buscarPorEmailSenha($usuario);
	
	if ($usuarioLogin)
	{
		session_start();
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['id'] = $usuarioLogin->getId();
		
		session_write_close();
		
		Redirect::to('app/index');
	}else
		Redirect::to('login');
	
	
// 	$sql = 'SELECT * FROM usuario WHERE email = "' . $_POST['email'] . '" AND senha = "' . $_POST['senha'] . '";';

// 	$query = mysql_query($sql,$conexao);

// 	$afetadas = mysql_num_rows($query);
	
// 	if ($afetadas <> 0)
// 	{
// 		session_start();
// 			$_SESSION['email'] = $_POST['email'];
// 		session_write_close();
		
// 		header("Location: index.php");
		
// 	}	
// 	else
// 	{
// 		echo 'Falha no Login';		
// 	}
}


?>