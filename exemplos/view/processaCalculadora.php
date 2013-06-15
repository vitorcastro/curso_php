<?php
// echo 'GET: <pre>';
// var_dump($_GET);
// echo '</pre>';


// echo 'POST <pre>';
// var_dump($_POST);
// echo '</pre>';

// echo 'REQUEST <pre>';
// var_dump($_REQUEST);
// echo '</pre>';

include '../Calculadora.php';

// criar variável de acordo com os indice do vetor
extract($_POST);

$calculadora = new Calculadora();

// $calculadora->setNumeros($_POST['numero1'], $_POST['numero2']);

$calculadora->setNumeros($numero1, $numero2);

// if ($_POST['operador'] == 1)
// {
// 	echo 'Total da Soma é :',$calculadora->somar();
// }elseif ($_POST['operador'] == 2)
// {
// 	echo $calculadora->subtrair();
// }elseif ($_POST['operador'] == 3)
// {
// 	echo $calculadora->multiplicacao();
// }elseif ($_POST['operador'] == 4)
// {
// 	echo $calculadora->divisao();
// }else {
// 	echo 'Selecione o operador <a href="index.php">Voltar</a>';
// }

switch ($_POST['operador'])
{
	case Calculadora::SOMA: {
		echo 'Total da Soma é :',$calculadora->somar();
		break;
	}
	
	case Calculadora::SUBTRAIR: {
		echo 'Subtrair :',$calculadora->subtrair();
		break;
	}
	
	case Calculadora::MULTIPLICAR: {
		echo 'Multiplicar :',$calculadora->multiplicacao();
		break;
	}
	
	case Calculadora::DIVIDIR: {
		echo 'Dividir :',$calculadora->divisao();
		break;
	}
	
	default:{
		echo 'Selecione o operador <a href="index.php">Voltar</a>';
	}
	
}

?>