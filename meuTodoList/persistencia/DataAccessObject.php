<?php

include_once 'ConexaoPDO.php';

class DataAccessObject
{
	private $statment;
	
	public function prepare($sql)
	{
		$conexaoPDO = new ConexaoPDO();
		$this->statment = $conexaoPDO->getConexao()->prepare($sql);
	} 
	
	public function setParam($param,$data)
	{
		$this->statment->bindParam($param, $data);
	}
	
	public function executeQuery()
	{
		try {
			return $this->statment->execute();
		} catch (PDOException $e) 
		{
			echo $e->getMessage();
		}
	}
	
	public function getList($class)
	{
		try {

			$this->executeQuery();
			return $this->statment->fetchAll(PDO::FETCH_CLASS,$class);
			
		} catch (PDOException $e) {
			
		}
	}
	
	public function getObject($class)
	{
		try {
		
			$this->executeQuery();
			return $this->statment->fetchObject($class);
				
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	
	
}

?>