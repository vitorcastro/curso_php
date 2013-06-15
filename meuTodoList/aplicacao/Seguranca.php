<?php
include_once '../../biblioteca/Redirect.php';

class Seguranca
{
	public static function usuarioLogado()
	{
		if (!isset($_SESSION['email'])){
			Redirect::to('../index');
		}
	}
	
}