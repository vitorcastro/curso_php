<?php

// importa direto
include 'Calculadora.php';
// verifica se ja foi importado e caso não, importa o arquivo
// include_once 'Calculadora.php';

// require 'Calculadora.php';
// require_once 'Calculadora.php';

$calculadora = new Calculadora();
$calculadora->setNumeros(20, 30);

echo $calculadora->somar();

echo '<pre>';
var_dump($calculadora);


?>