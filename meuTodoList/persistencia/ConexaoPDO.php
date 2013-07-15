<?php

/**
 * @author vitorcastro
 * Classe com a responsabilidade de conectar com banco de dados e disponibilizar a conexão para uso
 * A classe faz parte da camada de acesso a dados
 */
class ConexaoPDO
{
	// constantes definidas a partir das configurações de acesso ao banco de dados 
// 	const HOST = 'localhost';
// 	const DATA_BASE = 'meuTodoList';
// 	const USER = 'root';
// 	const PASSWORD = 'root';
	
	private $conexao;

	public function ConexaoPDO()
	{
		try {
			$path = IncludeFile::getPath() . '/app.ini';
			$config = parse_ini_file($path);
			
			// realizar a conexão com o banco de dados (new PDO)
			// o encapsulamento é feito para posterior disponibilização da conexão para a classe DataAccessObject
			$this->conexao = new PDO($this->getDsn($config['host'],$config['base']),$config['usuario'],$config['senha']);
		}
		catch (PDOException $e) {
			// tratamento de exceção
			echo '<b>SQL ERROR:</b> ',$e->getMessage(),' <br>';
			echo '<b>ERRNO:</b> ',$e->getCode();
		}
	}
	
	public function getConexao()
	{
		return $this->conexao;
	}
	
	private function getDsn($host,$database)
	{
		return 'mysql:host=' . $host . ';dbname=' . $database;
	}
	
	// Quando o objeto for retirado do servidor ou não estiver em uso, antes de ser descartado irá encerrar a conexão
	// por ser um driver, o PDO gerencia o pool de conexões aberta.
	public function __destruct()
	{
		$this->conexao = null;	
	}
}

?>