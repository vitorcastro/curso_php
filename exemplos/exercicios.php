<?php

function isNumeroPar($numero)
{
	return (($numero % 2) == 0) ? true: false;
}

/**
 * 1)
 * Armazene em uma lista todos os números pares de 1 a 10 e 
 * depois exibe o numero par ao quadrado
 */
// $lista_de_numeros_pares = array();


// $i = 10;
// echo $i++;
// echo ++$i;
// echo $i = $i + 1;
$listaDeNumeroPares = array();

for ($i = 1; $i <= 10; $i++) 
{
//	 condicao para caso seja par
// 	 if (($i % 2) == 0)
// 	 {
// 	 	$listaDeNumeroPares[] = $i;
// 	 }
// 	(($i % 2) == 0) ? $listaDeNumeroPares[] = $i : '';
	if (isNumeroPar($i))
		$listaDeNumeroPares[] = $i;
	
	echo '<br/>';
	echo $i;
}

echo '<h1>', count($listaDeNumeroPares), '</h1>';

// for ($i = 0; $i < count($listaDeNumeroPares); $i++)
// {
// 	echo '<br/>';
// 	echo $listaDeNumeroPares[$i] * $listaDeNumeroPares[$i];
// }

foreach ($listaDeNumeroPares as $numerosPares)
{
	echo '<br/>';
	echo $numerosPares * $numerosPares;
}

// $i = 0;

// while ($i < count($listaDeNumeroPares)) {
// 	echo '<br/>';
// 	echo $listaDeNumeroPares[$i] * $listaDeNumeroPares[$i];
// 	$i++;
// }






/**
 * 2)
 * Desenvolver um programa que recebe o total de horas e calcula o preço do estacionamento
 * Estacionamento
 * Taxa R$ 4,00 por duas horas
 * Adicional por hora de R$ 1,00
 */

/**
 * 3)
 * Realizar o calculo do Fatorial
 */

/**
 * 4)
 * Realizar o calculo do IMC = Peso / Altura * Altura
 * IMC < 20 - abaixo do peso
 * IMC maior que 20 e menor que 25 - normal
 * IMC maior que 25 e menor que 30 - excesso de peso
 * IMC maior que 30 e menor que 35 - Obesidade
 * IMC maior que 35 - obesidade mórbita  
 */

?>