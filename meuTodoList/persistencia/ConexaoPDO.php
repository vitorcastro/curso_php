<?php

class ConexaoPDO
{
	const HOST = 'localhost';
	const DATA_BASE = 'meuTodoList';
	const USER = 'root';
	const PASSWORD = 'root';
	
	private $conexao;

	public function ConexaoPDO()
	{
		try {
			$this->conexao = new PDO($this->getDsn(),self::USER,self::PASSWORD);
		}
		catch (PDOException $e) {
			echo '<b>SQL ERROR:</b> ',$e->getMessage(),' <br>';
			echo '<b>ERRNO:</b> ',$e->getCode();
		}
	}
	
	public function getConexao()
	{
		return $this->conexao;
	}
	
	private function getDsn()
	{
		return 'mysql:host=' . self::HOST . ';dbname=' . self::DATA_BASE;
	}
}

?>