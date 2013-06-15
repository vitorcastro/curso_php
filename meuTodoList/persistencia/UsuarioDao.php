<?php

include_once 'DataAccessObject.php';


class UsuarioDao
{
	public function inserir(Usuario $usuario)
	{
		$dao = new DataAccessObject();

		$sql = 'INSERT INTO usuario(email,senha) VALUES(:email,:senha);';
		$dao->prepare($sql);
		
		$dao->setParam(':email', $usuario->getEmail());
		$dao->setParam(':senha', $usuario->getSenha());
		
		return $dao->executeQuery();
	}
	
	public function atualizar(Usuario $usuario)
	{
		$dao = new DataAccessObject();
		
		$sql = 'UPDATE usuario SET email = ?, senha = ? WHERE id = ?';
		$dao->prepare($sql);
		
		$dao->setParam(1, $usuario->getEmail());
		$dao->setParam(2, $usuario->getSenha());
		$dao->setParam(3, $usuario->getId());
		
		return $dao->executeQuery();
	}
	
	public function buscarPorEmailSenha(Usuario $usuario)
	{
		$dao = new DataAccessObject();
		$sql = 'SELECT id,email,senha FROM usuario WHERE email = ? AND senha = ?';
		
		$dao->prepare($sql);
		
		$dao->setParam(1, $usuario->getEmail());
		$dao->setParam(2, $usuario->getSenha());
		
		return $dao->getObject('Usuario');
	}
	
	public function buscarTodos()
	{
		$dao = new DataAccessObject();
		$sql = 'SELECT id,email,senha FROM usuario';
		
		$dao->prepare($sql);
		
		return $dao->getList('Usuario');
	}
	
	public function excluirPorId($id)
	{
		$dao = new DataAccessObject();
		
		$sql = 'DELETE FROM usuario WHERE id = ?';
		$dao->prepare($sql);
		
		$dao->setParam(1, $id);
		
		return $dao->executeQuery();
	}
}

?>