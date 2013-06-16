<?php

include_once 'DataAccessObject.php';

/**
 * @author vitorcastro
 * Classe com a responsabilidade de realizar todas as funções que envolvam acesso ao banco de dados relacionado a entidade tabela usuario
 * A classe faz parte da camada de acesso a dados
 */
class UsuarioDao
{
	public function inserir(Usuario $usuario)
	{
		//Usa o objeto DataAccessObject para preparar e executar o comando SQL
		$dao = new DataAccessObject();

		// cada (?) no sql irá simbolizar que haverá um parametro a ser passado  
		$sql = 'INSERT INTO usuario(email,senha) VALUES(?,?);';
		$dao->prepare($sql);
		// está setando os parametros indicados no SQL 
		// OBS: a ordem da chamada do método setParam deve ser na mesma ordem das (?) 
		// Se invertessemos a ordem da senha com o email o SQL iria inserir a senha no campo email e o email no campo senha
		// Ex: $dao->setParam($usuario->getSenha());
		// 	   $dao->setParam($usuario->getEmail());
		
		$dao->setParam($usuario->getEmail());
		$dao->setParam($usuario->getSenha());
		
		return $dao->executeQuery();
	}
	
	public function atualizar(Usuario $usuario)
	{
		$dao = new DataAccessObject();
		
		$sql = 'UPDATE usuario SET email = ?, senha = ? WHERE id = ?';
		$dao->prepare($sql);
		
		$dao->setParam($usuario->getEmail());
		$dao->setParam($usuario->getSenha());
		$dao->setParam($usuario->getId());
		
		return $dao->executeQuery();
	}
	
	public function buscarPorEmailSenha(Usuario $usuario)
	{
		$dao = new DataAccessObject();
		$sql = 'SELECT id,email,senha FROM usuario WHERE email = ? AND senha = ?';
		
		$dao->prepare($sql);
		
		$dao->setParam($usuario->getEmail());
		$dao->setParam($usuario->getSenha());
		
		return $dao->getObject('Usuario');
	}
	
	public function buscarTodos()
	{
		$dao = new DataAccessObject();
		$sql = 'SELECT id,email,senha FROM usuario';
		$dao->prepare($sql);
		
		return $dao->getList('Usuario');
	}
	
	public function buscarPorId($id)
	{
		$dao = new DataAccessObject();
		
		$dao->prepare('SELECT id,email,senha FROM usuario WHERE id = ?');
		$dao->setParam($id);
		
		return $dao->getObject('Usuario');
	}
	
	public function excluirPorId($id)
	{
		$dao = new DataAccessObject();
		
		$sql = 'DELETE FROM usuario WHERE id = ?';
		$dao->prepare($sql);
		
		$dao->setParam($id);
		
		return $dao->executeQuery();
	}
}

?>