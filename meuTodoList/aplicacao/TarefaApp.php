<?php
IncludeFile::load('persistencia/TarefaDao');
IncludeFile::load('entidade/Tarefa');

class TarefaApp
{
	public function salvar($idUsuario,$titulo,$detalhe,$prioridade,$idCategoria)
	{
		$tarefa = new Tarefa();
		$tarefa->setIdUsuario($idUsuario);
		$tarefa->setTitulo($titulo);
		$tarefa->setDetalhe($detalhe);
		$tarefa->setPrioridade($prioridade);
		$tarefa->setIdCategoria($idCategoria);
		
		$tarefaDao = new TarefaDao();
		
		$inserir = $tarefaDao->inserir($tarefa);
		
		if ($inserir) 
			return true;
		else
			return false;
	}
	
	public function excluirTarefa($idTarefa,$idUsuario)
	{
		$tarefa = new Tarefa();
		$tarefa->setId($idTarefa);
		$tarefa->setIdUsuario($idUsuario);
		
		$tarefaDao = new TarefaDao();
		$excluir = $tarefaDao->excluir($tarefa);
		
		if ($excluir)
			return true;
		else
			return false;
	}
	
	public function buscaTodasTarefaPorUsuario($idUsuario)
	{
		$tarefaDao = new TarefaDao();
		return $tarefaDao->buscarTodosPorUsuario($idUsuario);
	}
	
	public function buscaTarefaPorPesquisa($palavra,$idUsuario)
	{
		$tarefa = new Tarefa();
		$tarefa->setDetalhe($palavra);
		$tarefa->setTitulo($palavra);
		$tarefa->setIdUsuario($idUsuario);
		
		$tarefaDao = new TarefaDao();
		return $tarefaDao->buscarTodasPorPesquisa($tarefa);
	}
	
	
}

?>