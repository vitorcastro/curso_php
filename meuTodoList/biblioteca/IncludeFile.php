<?php
/**
 * @author vitorcastro
 * Classe responsável por abstrair o processo de inclusão de arquivo com o php usando o INCLUDE
 */
class IncludeFile
{
	private static $host = 'http://localhost:8888/curso/curso_php/meuTodoList';
	
	public static function load($path)
	{
		// A variável $pathHost busca todo o caminho do servidor até a raiz do projeto
		// facilitando o processo de inclusão de arquivos .php e evitando os ../../
		$pathHost = self::getPath();
		include_once "$pathHost/$path.php";
	}
	
	public static function getPath()
	{
		return dirname(dirname(__FILE__));
	} 
	
	public static function getPathCss()
	{
		return self::$host . '/styles/css/';
	}
	
	public static function getPathJs()
	{
		return self::$host . '/styles/js/';
	}
	
	public static function js($name)
	{
		$path = self::getPathJs() . $name;
 		echo "<script src='$path'></script>";
	}
	
}

?>