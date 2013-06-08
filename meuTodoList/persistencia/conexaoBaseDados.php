<?php
$conexao = mysql_connect('localhost','root','root');

if ($conexao)
{
	$baseDados = mysql_select_db('meuTodoList',$conexao);
}else
	echo 'Falha na conexão';

function fecharConexao($conexao)
{
	mysql_close($conexao);
}

?>