<?php

// Operadores + - % / *
// convers�o de tipos
// constante

// $total = 5 % 2;

// $total = (float) $total;
// $total = floatval($total);

// $total = (int) $total;
// $total = intval($total);

// $total = (bool) $total;

// definir constantes
// define('DIVISOR', 2);

// $total = 5 / DIVISOR;

// is_int($total);
// is_bool($total);
// is_float($total);

$produtos = array('Leite','Feij�o','Arroz');
$produtosB = array('Sal','A�ucar','Pimenta');

// $produtos[] = 'Leite';
// $produtos[] = 'Feij�o';
// $produtos[5] = 'Arroz';

//$produtos = array(0 => "Leite",1 => "Feij�o", 5 => "Arroz");

// $exibe = '<h1>' . count($produtos) . '</h1>';
// echo $exibe;

$merger = array_merge($produtos,$produtosB);

echo '<h1>' , count($merger) , '</h1>';

echo '<pre>';
var_dump($sortProdutos);




?>