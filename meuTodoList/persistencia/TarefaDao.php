<?php
IncludeFile::load('persistencia/DataAccessObject');

class TarefaDao
{
	public function inserir(Tarefa $tarefa)
	{
		$dao = new DataAccessObject();

		$sql = 'INSERT INTO tarefa(idUsuario,titulo,detalhe,prioridade) VALUES(?,?,?,?);';
		$dao->prepare($sql);
		
		$dao->setParam(1, $tarefa->getIdUsuario());
		$dao->setParam(2, $tarefa->getTitulo());
		$dao->setParam(3, $tarefa->getDetalhe());
		$dao->setParam(4, $tarefa->getPrioridade());
		
		return $dao->executeQuery();
	}
	
	public function buscarTodosPorUsuario($idUsuario)
	{
		$dao = new DataAccessObject();
		$sql = 'SELECT id,titulo,detalhe,prioridade FROM tarefa WHERE idUsuario = ? ORDER BY prioridade DESC';
		
		$dao->prepare($sql);
		
		$dao->setParam(1, $idUsuario);
		
		return $dao->getList('Tarefa');
	}
	
	public function buscarTodasPorPesquisa(Tarefa $tarefa)
	{
		$dao = new DataAccessObject();
		$sql = 'SELECT id,titulo,detalhe,prioridade FROM tarefa 
					WHERE idUsuario = ? AND (titulo LIKE ? OR detalhe LIKE ?) ORDER BY prioridade DESC';
	
		$dao->prepare($sql);
	
		$dao->setParam(1, $tarefa->getIdUsuario());
		$dao->setParam(2, '%' . $tarefa->getTitulo() . '%');
		$dao->setParam(3, '%' . $tarefa->getDetalhe() . '%');
		
	
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