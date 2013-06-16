<?php

/**
 * @author vitorcastro
 * Classe com a responsabilidade de conectar com banco de dados e disponibilizar a conex�o para uso
 * A classe faz parte da camada de acesso a dados
 */
class ConexaoPDO
{
	// constantes definidas a partir das configura��es de acesso ao banco de dados 
	const HOST = 'localhost';
	const DATA_BASE = 'meuTodoList';
	const USER = 'root';
	const PASSWORD = 'root';
	
	private $conexao;

	public function ConexaoPDO()
	{
		try {
			// realizar a conex�o com o banco de dados (new PDO)
			// o encapsulamento � feito para posterior disponibiliza��o da conex�o para a classe DataAccessObject
			$this->conexao = new PDO($this->getDsn(),self::USER,self::PASSWORD);
		}
		catch (PDOException $e) {
			// tratamento de exce��o
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
	
	// Quando o objeto for retirado do servidor ou n�o estiver em uso, antes de ser descartado ir� encerrar a conex�o
	// por ser um driver, o PDO gerencia o pool de conex�es aberta.
	public function __destruct()
	{
		$this->conexao = null;	
	}
}

?>