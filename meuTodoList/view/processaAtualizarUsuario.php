<?php

include_once '../persistencia/conexaoBaseDados.php';

if (isset($_POST['AtualizarUsuario']))
{
	

$sql = 'UPDATE usuario SET email = "' . $_POST['email'] . '", senha = "' . $_POST['senha'] . '" WHERE id = "' . $_POST['id'] . '";';
$query = mysql_query($sql,$conexao);

fecharConexao($conexao);

if ($query)
{
	header("Location: visualizarTodosUsuario.php");
}else
	header("Location: index.php");

}
?>