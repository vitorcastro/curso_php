<?php
IncludeFile::load('persistencia/DataAccessObject');

class TarefaDao
{
	public function inserir(Tarefa $tarefa)
	{
		$dao = new DataAccessObject();

		$sql = 'INSERT INTO tarefa(idUsuario,titulo,detalhe,prioridade) VALUES(?,?,?,?);';
		$dao->prepare($sql);
		
		$dao->setParam($tarefa->getIdUsuario());
		$dao->setParam($tarefa->getTitulo());
		$dao->setParam($tarefa->getDetalhe());
		$dao->setParam($tarefa->getPrioridade());
		
		return $dao->executeQuery();
	}
	
	public function buscarTodosPorUsuario($idUsuario)
	{
		$dao = new DataAccessObject();
		$sql = 'SELECT id,titulo,detalhe,prioridade FROM tarefa WHERE idUsuario = ? ORDER BY prioridade DESC';
		
		$dao->prepare($sql);
		
		$dao->setParam($idUsuario);
		
		return $dao->getList('Tarefa');
	}
	
	public function buscarTodasPorPesquisa(Tarefa $tarefa)
	{
		$dao = new DataAccessObject();
		// o operador LIKE significa parecido com e o % indica que pode ocorrer qualquer string antes ou depois no caso:
		// LIKE %TESTE%
		// LIKE TESTE% , significa o que vai ser buscado todas as strings que iniciam com a palavra TESTE.
		// LIKE %TESTE , significa o que vai ser buscado todas as strings que finalizam com a palavra TESTE.
		
		$sql = 'SELECT id,titulo,detalhe,prioridade FROM tarefa 
					WHERE idUsuario = ? AND (titulo LIKE ? OR detalhe LIKE ?) 
					ORDER BY prioridade DESC';
	
		$dao->prepare($sql);
	
		$dao->setParam($tarefa->getIdUsuario());
		$dao->setParam('%' . $tarefa->getTitulo() . '%');
		$dao->setParam('%' . $tarefa->getDetalhe() . '%');
	
		return $dao->getList('Tarefa');
	}
	
	public function excluir(Tarefa $tarefa)
	{
		$dao = new DataAccessObject();
		
		$sql = 'DELETE FROM tarefa WHERE id = ? AND idUsuario = ?';
		$dao->prepare($sql);
		
		$dao->setParam(1, $tarefa->getId());
		$dao->setParam(2, $tarefa->getIdUsuario());
		
		return $dao->executeQuery();
	}
}

?>