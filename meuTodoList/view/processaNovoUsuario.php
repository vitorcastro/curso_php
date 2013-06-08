<?php
include_once '../persistencia/conexaoBaseDados.php';

if (isset($_POST['NovoUsuario']))
{
	$sql = 'INSERT INTO usuario(email,senha) VALUES("' . $_POST['email'] . '","' . $_POST['senha'] . '");';
	
	$query = mysql_query($sql,$conexao);
	
	if ($query)
		header('Location: index.php');
	else
		header('Location: novoUsuario.php');
}

?>