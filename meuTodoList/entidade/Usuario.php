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
		// métodos de criptografia
		// md5, sha1 (não reversivel)
		// base_encode (reversivel)
		//$senha = md5($senha);
		//$senha = sha1($senha);
		//$senha = base64_encode($senha);
		
		$this->senha = md5($senha);
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
		// usar base64_decode($this->senha) 
		// caso seja usado o base64_encode
		return $this->senha;
	}
	
}


?>