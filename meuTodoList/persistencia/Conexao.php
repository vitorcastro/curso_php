<?php

class Conexao
{
	const HOST = 'localhost';
	const DATA_BASE = 'meuTodoList';
	const USER = 'root';
	const PASSWORD = 'root';
	
	private $conexao;
	
	public function Conexao()
	{
		$this->conexao = mysql_connect(self::HOST,self::USER,self::PASSWORD);
		if ($this->conexao)
			$baseDados = mysql_select_db(self::DATA_BASE,$this->conexao);
		else
			echo 'Falha na conexão';
	}
	
	public function fecharConexao()
	{
		mysql_close($this->conexao);
	}
	
	public function executeQuery($sql)
	{
		$query = mysql_query($sql,$this->conexao);
		$this->fecharConexao();
		return $query;
	}
}

?>