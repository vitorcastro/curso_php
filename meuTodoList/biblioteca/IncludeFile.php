<?php

/**
 * @author vitorcastro
 * Classe responsável por abstrair o processo de inclusão de arquivo com o php usando o INCLUDE
 */
class IncludeFile
{
	public static function load($path)
	{
		// A variável $pathHost busca todo o caminho do servidor até a raiz do projeto
		// facilitando o processo de inclusão de arquivos .php e evitando os ../../
		$pathHost = dirname(dirname(__FILE__));
		include_once "$pathHost/$path.php";
	}
	
}

?>