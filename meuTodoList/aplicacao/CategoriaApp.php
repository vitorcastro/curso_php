<?php
IncludeFile::load('persistencia/CategoriaDao');
IncludeFile::load('entidade/Categoria');

class CategoriaApp
{
	public function buscarTodos()
	{
		$categoriaDao = new CategoriaDao();
		return $categoriaDao->selectAll();
	}
	
	public function buscarTotalTarefaUsuarioPorCategoria($idUsuario)
	{
		$categoriaDao = new CategoriaDao();
		return $categoriaDao->selectCountTarefaUsuarioPorCategoria($idUsuario);
	}
	
	
}