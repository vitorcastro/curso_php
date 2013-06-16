<?php

/**
 * @author vitorcastro
 * Classe respons�vel por abstrair o processo de inclus�o de arquivo com o php usando o INCLUDE
 */
class IncludeFile
{
	public static function load($path)
	{
		// A vari�vel $pathHost busca todo o caminho do servidor at� a raiz do projeto
		// facilitando o processo de inclus�o de arquivos .php e evitando os ../../
		$pathHost = dirname(dirname(__FILE__));
		include_once "$pathHost/$path.php";
	}
	
}

?>