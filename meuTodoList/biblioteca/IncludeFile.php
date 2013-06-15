<?php

class IncludeFile
{
	public static function load($path)
	{
		$pathHost = dirname(dirname(__FILE__));
		include_once "$pathHost/$path.php";
	}
	
}

?>