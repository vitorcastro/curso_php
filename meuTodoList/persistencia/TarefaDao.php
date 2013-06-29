<?php
IncludeFile::load('persistencia/DataAccessObject');

class TarefaDao
{
	public function inserir(Tarefa $tarefa)
	{
		$dao = new DataAccessObject();

		$sql = 'INSERT INTO tarefa(idUsuario,titulo,detalhe,prioridade,idCategoria) VALUES(?,?,?,?,?);';
		$dao->prepare($sql);
		
		$dao->setParam($tarefa->getIdUsuario());
		$dao->setParam($tarefa->getTitulo());
		$dao->setParam($tarefa->getDetalhe());
		$dao->setParam($tarefa->getPrioridade());
		$dao->setParam($tarefa->getIdCategoria());
		
		
		return $dao->executeQuery();
	}
	
	public function buscarTodosPorUsuario($idUsuario)
	{
		$dao = new DataAccessObject();
// 		busca todas as tarefas do usuсrio sem a categoria
// 		$sql = 'SELECT id,titulo,detalhe,prioridade, 
// 					IFNULL(idCategoria,"Sem Categoria") as categoria 
// 						FROM tarefa 
// 							WHERE idUsuario = ? ORDER BY prioridade DESC';

// 		Faz a junчуo por restriчуo
// 		$sql = 'SELECT t.id,t.titulo,t.detalhe,t.prioridade, c.descricao as categoria
// 		 				FROM tarefa t, categoria c
// 		 					WHERE t.idCategoria = c.id AND idUsuario = ?
// 								ORDER BY prioridade DESC';
		
//		Faz a junчуo das duas tabela e gera o produto cartesiano
// 		$sql = 'SELECT t.id,t.titulo,t.detalhe,t.prioridade, c.descricao as categoria 
// 					FROM tarefa t JOIN categoria c 
// 					WHERE idUsuario = ? ORDER BY prioridade DESC';

// 		Faz a junчуo com a condiчуo de relaчуo
		$sql = 'SELECT t.id,t.titulo,t.detalhe,t.prioridade, c.descricao as categoria
		 			FROM tarefa t JOIN categoria c ON (t.idCategoria = c.id)
		 				WHERE idUsuario = ? 
							ORDER BY prioridade DESC';

// 		Faz a junчуo trazendo todos os elementos a esquerda independente dos a direita
// 		$sql = 'SELECT t.id,t.titulo,t.detalhe,t.prioridade, 
// 					IFNULL(c.descricao,"Sem Categoria") as categoria
// 		 			FROM tarefa t LEFT JOIN categoria c ON (t.idCategoria = c.id)
// 		 				WHERE idUsuario = ? 
// 							ORDER BY prioridade DESC';

// 		Faz a junчуo trazendo todos os elementos a direita independente dos a esquerda
// 		$sql = 'SELECT t.id,t.titulo,t.detalhe,t.prioridade, c.descricao as categoria
// 		 			FROM tarefa t RIGHT JOIN categoria c ON (t.idCategoria = c.id)
// 		 				WHERE idUsuario = ?
// 							ORDER BY prioridade DESC';
		
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