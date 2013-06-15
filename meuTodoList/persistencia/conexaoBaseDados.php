<?php
// cria a conexao com o banco de dados
$conexao = mysql_connect('localhost','root','root');

if ($conexao)
{
	//usar a base de dados
	$baseDados = mysql_select_db('meuTodoList',$conexao);
	
	if (!$baseDados)
		echo 'Falha na Seleчуo da Base de dados';
}else
	echo 'Falha na conexуo';

function fecharConexao($conexao)
{
	mysql_close($conexao);
}

?>