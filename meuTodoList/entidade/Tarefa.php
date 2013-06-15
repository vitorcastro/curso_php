<?php

class Tarefa
{
	private $id;
	private $idUsuario;
	private $titulo;
	private $detalhe;
	private $prioridade;
	private $anexo;
	
	public function setId($id)
	{
		$this->id = $id;
	}
	
	public function setIdUsuario($idUsuario)
	{
		$this->idUsuario = $idUsuario;
	}
	
	public function setTitulo($titulo)
	{
		$this->titulo = $titulo;
	}
	
	public function setDetalhe($detalhe)
	{
		$this->detalhe = $detalhe;
	}
	
	public function setPrioridade($prioridade)
	{
		$this->prioridade = $prioridade;
	}
	
	public function setAnexo(Anexo $anexo)
	{
		$this->anexo = $anexo;
	}
	
	public function getId()
	{
		return $this->id;
	}
	
	public function getIdUsuario()
	{
		return $this->idUsuario;
	}
	
	public function getTitulo()
	{
		return $this->titulo;
	}
	
	public function getDetalhe()
	{
		return $this->detalhe;
	}
	
	public function getPrioridade()
	{
		return $this->prioridade;
	}
	
	public function getAnexo()
	{
		return $this->anexo;
	}
	
}



?>