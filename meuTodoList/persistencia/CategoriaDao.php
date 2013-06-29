<?php
IncludeFile::load('persistencia/DataAccessObject');

class CategoriaDao
{
	public function selectAll()
	{
		$dao = new DataAccessObject();
		$dao->prepare('SELECT id,descricao FROM categoria');
		return $dao->getList('Categoria');
	}
	
	public function selectCountTarefaUsuarioPorCategoria($idUsuario)
	{
		$dao = new DataAccessObject();
		
// 		busca todas as tarefas do usuário e agrupa por categoria e conta os total
// 		$sql = 'SELECT IFNULL(c.descricao,"Sem Categoria") descricao, COUNT(t.id) total 
// 					FROM tarefa t LEFT JOIN categoria c ON (t.idCategoria = c.id)
// 						WHERE t.idUsuario = ? GROUP BY c.id';
		
// 		busca todas as categorias e os totais de tarefas do usuário		
		$sql = 'SELECT IFNULL(c.descricao,"Sem Categoria") descricao, COUNT(t.id) total
					FROM categoria c LEFT JOIN 
						(SELECT * FROM tarefa t WHERE t.idUsuario = ?) t ON (c.id = t.idCategoria)
						GROUP BY c.id';
		
		$dao->prepare($sql);
		$dao->setParam($idUsuario);
		
		return $dao->getList('Categoria');
	}
	
}