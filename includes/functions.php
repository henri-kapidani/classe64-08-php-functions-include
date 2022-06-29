<?php

$num3 = 100;

function somma($num1, $num2) {
	global $num3; // in alternativa usare $GLOBALS['num3']
	global $somma; // in alternativa usare $GLOBALS['somma']

	$somma = $num1 + $num2 + $num3;
	if ($somma > 10) {
		return $somma;
	} else {
		return 'la somma è troppo piccola';
	}
}


// somma(5, 6);

// echo '<br>';

// echo $somma;

// var_dump($GLOBALS); // questa è una superglobal

function differenza($num1, $num2) {
	return $num2 - $num1;
}