<?php
// Inclus�o das classes para uso
IncludeFile::load('persistencia/UsuarioDao');
IncludeFile::load('entidade/Usuario');
IncludeFile::load('biblioteca/Redirect');

/**
 * @author vitorcastro
 * Classe com a responsabilidade de realizar todas as fun��es que envolvam a entidade Usu�rio
 * A classe faz parte da camada de aplica��o
 */
class UsuarioApp
{
	public function salvarUsuario($email,$senha)
	{
		// encapsulamento do objeto usu�rio
		$usuario = new Usuario();
		$usuario->setEmail($email);
		
		$usuario->setSenha($senha);
		
		$usuarioDao = new UsuarioDao();
		return $usuarioDao->inserir($usuario);
	}
	
	public function atualizarUsuario($id,$email,$senha)
	{
		// encapsulamento do objeto usu�rio
		$usuario = new Usuario();
		$usuario->setId($id);
		$usuario->setEmail($email);
		$usuario->setSenha($senha);
		
		// chamada a classe de acesso a dados
		$usuarioDao = new UsuarioDao();
		return $usuarioDao->atualizar($usuario);
	}
	
	public function verificarLogin($email,$senha)
	{
		$usuario = new Usuario();
		$usuario->setEmail($email);
		$usuario->setSenha($senha);
		
		$usuarioDao = new UsuarioDao();
		return $usuarioDao->buscarPorEmailSenha($usuario);
	}
	
	public function excluirUsuarioPorId($id)
	{
		$usuarioDao = new UsuarioDao();
		return $usuarioDao->excluirPorId($id);
	}
	
	public function buscarTodosUsuario()
	{
		$usuarioDao = new UsuarioDao();
		return $usuarioDao->buscarTodos();
	}
	
	public function buscarUsuarioPorId($id)
	{
		$usuarioDao = new UsuarioDao();
		return $usuarioDao->buscarPorId($id);
	}
}

?>