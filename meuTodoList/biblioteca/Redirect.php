<?php

/**
 * @author vitorcastro
 * Classe respons�vel por realizar os redirecionamentos entre as p�ginas php 
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