<?php

// operaчуo de soma, subtracao, multiplicacao e divisao
include 'ICalculadora.php';

class Calculadora implements ICalculadora
{
	const SOMA = 1;
	const SUBTRAIR = 2;
	const MULTIPLICAR = 3;
	const DIVIDIR = 4;
// 	public static $SOMA = 1;
	
// 	var $numero1;
	private $numero1;
	private $numero2;
	
// 	public function Calculadora()
// 	{
// 		$this->numero1 = $numero1;
// 		$this->numero2 = $numero2;
// 	}
	
	public function setNumeros($numero1,$numero2)
	{
		$this->numero1 = $numero1;
		$this->numero2 = $numero2;
	}
	
// 	protected  $numero1;
// 	private $numero1;
	
	function somar()
	{
		return $this->numero1 + $this->numero2;
	}
	
	function somarDoisValores($numero1, $numero2)
	{
		return $numero1 + $numero2;
	}
	
	function subtrair()
	{
		return $this->numero1 - $this->numero2;
	}
	
	function divisao()
	{
		return $this->numero1 / $this->numero2;
		
	}
	
	function multiplicacao()
	{
		return $this->numero1 * $this->numero2;
	}
}

?>