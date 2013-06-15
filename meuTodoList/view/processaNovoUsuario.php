<?php
include_once '../persistencia/UsuarioDao.php';
include_once '../entidade/Usuario.php';
include_once '../biblioteca/Redirect.php';


if (isset($_POST['NovoUsuario']))
{
	$usuario = new Usuario();
	$usuario->setEmail($_POST['email']);
	$usuario->setSenha($_POST['senha']);


	$usuarioDao = new UsuarioDao();
	$inserir = $usuarioDao->inserir($usuario);
	
	
	//DML INSERT INTO <nomeTabela>[campo,] VALUES([valores,]);
// 	$sql = 'INSERT INTO usuario(email,senha) 
// 				VALUES("' . $_POST['email'] . '","' . $_POST['senha'] . '");';
	
// 	$query = mysql_query($sql,$conexao);
	
	if ($inserir)
		Redirect::to('index');
	else
		Redirect::to('novoUsuario');
}

?>