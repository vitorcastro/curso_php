<?php

/**
 * @author vitorcastro
 * Classe responsável por realizar os redirecionamentos entre as páginas php 
 */
class Redirect
{
	
	public static function to($url)
	{
		// POR PHP
		// header("Location: $url.php");
		
		//COM HTML
		echo "<meta http-equiv='refresh' content='0;url=$url.php'>";
		die();
	}
	
	
	
}