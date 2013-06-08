<?php

include_once '../persistencia/conexaoBaseDados.php';

$sql = 'DELETE FROM usuario WHERE id = "' . $_GET['id'] . '";';
$query = mysql_query($sql,$conexao);

fecharConexao($conexao);

if ($query)
{
	header("Location: visualizarTodosUsuario.php");
}else
	header("Location: index.php");
	

?>