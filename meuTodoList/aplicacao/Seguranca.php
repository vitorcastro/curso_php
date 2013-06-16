<?php
include_once '../../biblioteca/Redirect.php';

/**
 * @author vitorcastro
 * Classe respons�vel pela Seguran�a da aplica��o
 */
class Seguranca
{
	// O met�do faz uma verifa��o simples se o usu�rio tem a variavel de $_SESSION (est� logado)
	// e caso n�o tenha redireciona para a p�gina de login
	public static function usuarioLogado()
	{
		if (!isset($_SESSION['email'])){
			Redirect::to('../login');
		}
	}
	
}