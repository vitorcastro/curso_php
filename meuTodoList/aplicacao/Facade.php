<?php
IncludeFile::load('aplicacao/TarefaApp');
IncludeFile::load('aplicacao/UsuarioApp');
IncludeFile::load('entidade/Prioridade');
IncludeFile::load('biblioteca/Redirect');

/**
 * @author vitorcastro
 * A classe tem a responsabilidade de tratar todas as requisi��o das p�ginas da camada de vis�o (VIEW)
 * O padr�o de projeto FACADE � aplica��o para realizar uma abstra��o do subSistema, no nosso caso, para efeito de aplica��o, iremos usar para abstrair todo o sistema
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
		// Verificar se h� o POST do Bot�o do Formul�rio de cadastro do Usu�rio
		if (isset($_POST['NovoUsuario']))
		{
			$usuarioApp = new UsuarioApp();
			$inserir = $usuarioApp->salvarUsuario($_POST['email'], $_POST['senha']);
			
			//Redirecionamento de p�gina
			if ($inserir)
				Redirect::to('index');
			else
				Redirect::to('novoUsuario');
		}
	}
	
	public function atualizarUsuario()
	{
		// verificar se existe o $_POST[AtualizarUsuario], que � o mesmo nome do bot�o do formul�rio
		if (isset($_POST['AtualizarUsuario']))
		{
			//Captura as informa��o do $_POST e passa como parametro para o m�todo atualizarUsuario
			$usuarioApp = new UsuarioApp();
			$atualizar = $usuarioApp->atualizarUsuario($_POST['id'], $_POST['email'], $_POST['senha']);
		
			//Redirecionamento de p�gina
			if ($atualizar)
				Redirect::to('visualizarTodosUsuario');
			else
				Redirect::to('index');
		}
	}
	
	/**
	 * Realiza a exclus�o da vari�vel de sess�o do usu�rio ($_SESSION) 
	 */
	public function realizarLogout()
	{
		session_start();
		session_destroy();
		Redirect::to('index');
	}
	
	/**
	 * M�todo verifica se o email e senha passado est� no Banco da dados a autentica o usu�rio
	 * redirecinando para a p�gina inicial do aplicativo /app/index.php
	 */
	public function realizarLogin()
	{
		// verificar se existe o $_POST[login], que � o mesmo nome do bot�o do formul�rio
		if (isset($_POST['Login']))
		{
			$usuarioApp = new UsuarioApp();
			$usuarioLogin = $usuarioApp->verificarLogin($_POST['email'], $_POST['senha']);
		
			if ($usuarioLogin)
			{
				// inicializa ou abre a vari�vel de $_SESSION
				session_start();
		
				// adiciona valores no array $_SESSION
				$_SESSION['email'] = $_POST['email'];
				// o $_SESSION[id] ser� importante para identificar quem � o usu�rio que est� logado 
				$_SESSION['id'] = $usuarioLogin->getId();
		
				// escreve e fecha a escrita no array $_SESSION
				session_write_close();
		
				//Redirecionamento de p�gina
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
			
			//Redirecionamento de p�gina
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
		
			// Recebe os parametros via $_GET e passa para o m�todo excluirUsuarioPorId
			$excluir = $usuarioApp->excluirUsuarioPorId($_GET['id']);
			
			//Redirecionamento de p�gina
			if ($excluir)
				Redirect::to('visualizarTodosUsuario');
			else
				Redirect::to('index');
		}
	}
	
}