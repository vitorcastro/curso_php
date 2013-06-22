<?php

include_once 'ConexaoPDO.php';

/**
 * @author vitorcastro
 * Classe com a responsabilidade de criar os statment de todas as transa��es com o banco de dados
 * � usada com uma classe gen�rica de acesso a dados
 * Todas as requisi��es(SQL) devem passar por essa classe
 * A classe faz parte da camada de acesso a dados
 */
class DataAccessObject
{
	private $statment;
	private $incrementStatment;
	
	public function prepare($sql)
	{
		// faz a conex�o com o banco de dados
		$conexaoPDO = new ConexaoPDO();
		
		// ir� encapsular um novo statment a partir do $sql passado como par�metro.
		// o m�todo prepare ir� preparar(pr�-compilar) o SQL para ser executado al�m de verificar 
		// se h� par�metro a serem adicionados no SQL pelo (?)  
		$this->statment = $conexaoPDO->getConexao()->prepare($sql);
		// zera o atributo para inicializar a contagem da posi��o dos parametros do sql
		$this->incrementStatment = 0;
	} 
	
	public function setParam($data)
	{
		$this->statment->bindParam(++$this->incrementStatment, $data);
	}
	
	/**
	 * @return boolean
	 */
	public function executeQuery()
	{
		try {
			// verifica se a query foi executada no banco de dados, semelhante a fun��o nativa mysql_query()
			$query = $this->statment->execute();
			
			$error = $this->statment->errorInfo();
			
			if (isset($error[0])){
				if ($error[0] != '00000')
				{
					echo $error[2];
				}
			}
			
			return $query;
			
		} catch (PDOException $e) 
		{
			//tratamento de exce��o caso ocorra alguma falha
			echo $e->getMessage();
		}
	}
	
	/**
	 */
	public function getList($class)
	{
		try {
			// executa a query
			$this->executeQuery();
			// retorna uma lista de objetos afetados pelo statment do tipo passado como parametro $class
			return $this->statment->fetchAll(PDO::FETCH_CLASS,$class);
			
		} catch (PDOException $e) {
			//tratamento de exce��o caso ocorra alguma falha
			echo $e->getMessage();
		}
	}
	
	public function getObject($class)
	{
		try {
		
			$this->executeQuery();
			// retorna apenas um objeto afetado pelo statment do tipo passado como parametro $class
			return $this->statment->fetchObject($class);
				
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
}

?>