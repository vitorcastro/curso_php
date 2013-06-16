<?php

/**
 * @author vitorcastro
 * Classe representa a tabela(usuario) do banco da dados 
 */
class Usuario
{
	private $id;
	private $email;
	private $senha;
	
	public function setId($id)
	{
		$this->id = $id;
	}
	
	public function setEmail($email)
	{
		$this->email = $email;
	}
	
	public function setSenha($senha)
	{
		$this->senha = $senha;
	}
	
	public function getId()
	{
		return $this->id;
	}
	
	public function getEmail()
	{
		return $this->email;
	}
	
	public function getSenha()
	{
		return $this->senha;
	}
	
}


?>