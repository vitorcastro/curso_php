<?php
IncludeFile::load('aplicacao/TarefaApp');
IncludeFile::load('aplicacao/UsuarioApp');
IncludeFile::load('entidade/Prioridade');
IncludeFile::load('biblioteca/Redirect');

/**
 * @author vitorcastro
 * A classe tem a responsabilidade de tratar todas as requisição das páginas da camada de visão (VIEW)
 * O padrão de projeto FACADE é aplicação para realizar uma abstração do subSistema, no nosso caso, para efeito de aplicação, iremos usar para abstrair todo o sistema
 */
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
	
	/**
	 * USUARIO
	 */
	
	public function salvarUsuario()
	{
		// Verificar se há o POST do Botão do Formulário de cadastro do Usuário
		if (isset($_POST['NovoUsuario']))
		{
			$usuarioApp = new UsuarioApp();
			$inserir = $usuarioApp->salvarUsuario($_POST['email'], $_POST['senha']);
			
			//Redirecionamento de página
			if ($inserir)
				Redirect::to('index');
			else
				Redirect::to('novoUsuario');
		}
	}
	
	public function atualizarUsuario()
	{
		// verificar se existe o $_POST[AtualizarUsuario], que é o mesmo nome do botão do formulário
		if (isset($_POST['AtualizarUsuario']))
		{
			//Captura as informação do $_POST e passa como parametro para o método atualizarUsuario
			$usuarioApp = new UsuarioApp();
			$atualizar = $usuarioApp->atualizarUsuario($_POST['id'], $_POST['email'], $_POST['senha']);
		
			//Redirecionamento de página
			if ($atualizar)
				Redirect::to('visualizarTodosUsuario');
			else
				Redirect::to('index');
		}
	}
	
	/**
	 * Realiza a exclusão da variável de sessão do usuário ($_SESSION) 
	 */
	public function realizarLogout()
	{
		session_start();
		session_destroy();
		Redirect::to('index');
	}
	
	/**
	 * Método verifica se o email e senha passado está no Banco da dados a autentica o usuário
	 * redirecinando para a página inicial do aplicativo /app/index.php
	 */
	public function realizarLogin()
	{
		// verificar se existe o $_POST[login], que é o mesmo nome do botão do formulário
		if (isset($_POST['Login']))
		{
			$usuarioApp = new UsuarioApp();
			$usuarioLogin = $usuarioApp->verificarLogin($_POST['email'], $_POST['senha']);
		
			if ($usuarioLogin)
			{
				// inicializa ou abre a variável de $_SESSION
				session_start();
		
				// adiciona valores no array $_SESSION
				$_SESSION['email'] = $_POST['email'];
				// o $_SESSION[id] será importante para identificar quem é o usuário que está logado 
				$_SESSION['id'] = $usuarioLogin->getId();
		
				// escreve e fecha a escrita no array $_SESSION
				session_write_close();
		
				//Redirecionamento de página
				Redirect::to('app/index');
			}else
				Redirect::to('login');
		}
	}
	
	public function buscarTodosUsuario()
	{
		$usuarioApp = new UsuarioApp();
		return $usuarioApp->buscarTodosUsuario();
	}
	
	public function buscarUsuarioPorId()
	{
		// verificar se existe o $_GET[id]
		if (isset($_GET['id']))
		{
			$usuarioApp = new UsuarioApp();
			$usuario = $usuarioApp->buscarUsuarioPorId($_GET['id']);
			
			//Redirecionamento de página
			if ($usuario)
				return $usuario;
			else
				Redirect::to('visualizarTodosUsuario');
		}else
			Redirect::to('visualizarTodosUsuario');
	}
	
	public function excluirUsuario()
	{
		// verificar se existe o $_GET[id]
		if (isset($_GET['id']))
		{
			$usuarioApp = new UsuarioApp();
		
			// Recebe os parametros via $_GET e passa para o método excluirUsuarioPorId
			$excluir = $usuarioApp->excluirUsuarioPorId($_GET['id']);
			
			//Redirecionamento de página
			if ($excluir)
				Redirect::to('visualizarTodosUsuario');
			else
				Redirect::to('index');
		}
	}
	
}