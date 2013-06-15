<?php
IncludeFile::load('aplicacao/TarefaApp');
IncludeFile::load('entidade/Prioridade');
IncludeFile::load('biblioteca/Redirect');

class Facade
{
	/**
	 * TAREFA
	 */
	public function processaSalvarTarefa()
	{
		if (isset($_POST['SalvarTarefa']))
		{
			$tarefaApp = new TarefaApp();
			
			$inserir = $tarefaApp->salvar($_SESSION['id'], $_POST['titulo'], $_POST['detalhe'], $_POST['prioridade']);
			
			if ($inserir)
				Redirect::to('index');
			else
				Redirect::to('novaTarefa');
		}
	}
	
	public function buscaTodasTarefaDoUsuario()
	{
		$tarefaApp = new TarefaApp();
		return $tarefaApp->buscaTodasTarefaPorUsuario($_SESSION['id']);
	}
	
	public function realizarBuscaTarefas()
	{
		if (isset($_POST['RealizarBusca']))
		{
			$tarefaApp = new TarefaApp();
			return $tarefaApp->buscaTarefaPorPesquisa($_POST['busca'],$_SESSION['id']);
		}
	}
	
	
	public function excluirTarefa()
	{
		if (isset($_GET['excluir']) && isset($_GET['id']))
		{
			$tarefaApp = new TarefaApp();
			$excluir = $tarefaApp->excluirTarefa($_GET['id'], $_SESSION['id']);
			
			Redirect::to('index');
		}
	}
	
	public function getPrioridadeById($prioridade)
	{
		return Prioridade::getById($prioridade);
	}
}