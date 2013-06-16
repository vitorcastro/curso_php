<?php
include_once '../../biblioteca/Redirect.php';

/**
 * @author vitorcastro
 * Classe responsбvel pela Seguranзa da aplicaзгo
 */
class Seguranca
{
	// O metуdo faz uma verifaзгo simples se o usuбrio tem a variavel de $_SESSION (estб logado)
	// e caso nгo tenha redireciona para a pбgina de login
	public static function usuarioLogado()
	{
		if (!isset($_SESSION['email'])){
			Redirect::to('../login');
		}
	}
	
}