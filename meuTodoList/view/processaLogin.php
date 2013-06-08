<?php
include_once '../persistencia/conexaoBaseDados.php';

if (isset($_POST['Login']))
{
	$sql = 'SELECT * FROM usuario WHERE email = "' . $_POST['email'] . '" AND senha = "' . $_POST['senha'] . '";';

	$query = mysql_query($sql,$conexao);

	$afetadas = mysql_num_rows($query);
	
	if ($afetadas <> 0)
	{
		session_start();
			$_SESSION['email'] = $_POST['email'];
		session_write_close();
		
		header("Location: index.php");
		
	}	
	else
	{
		echo 'Falha no Login';		
	}
}


?>