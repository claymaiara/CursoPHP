<?php

/**
 * Exemplo de closure
 */
/*
$saudacao = "Hello, World!";

// Define a função
$closure = function() use ($saudacao) { echo $saudacao; };

// Chama a função
$closure();
*/

/**
 *Exemplo de closure sem referencia:
 */
/*
$saudacao = "Hello, World!";

// Define a função
$closure = function() use ($saudacao) {
	$saudacao = "Novo texto.";
	return $saudacao;
};

// Imprime o resultado da função
var_dump($closure());

// Imprime o valor da variável global 'saudacao'
var_dump($saudacao);
*/
/**
 * Exemplo de closure com referencia:
 */
/*
$saudacao = "Hello, World!";

// Define a função
$closure = function() use (&$saudacao) {
    $saudacao = "Novo texto.";
    return $saudacao;
};

// Imprime o resultado da função
var_dump($closure());

// Imprime o valor da variável global 'saudacao'
var_dump($saudacao);
*/

/**
 * Outros exemplos 	que usam o conceito de closure:
 */
/*
$config = array("parsear" => TRUE);

$formata = function($html) use($config) {
	if( $config["parsear"]===TRUE ) {
		$html = preg_replace('/\[b](.*?)\[\/b]/', '<b>$1</b>', $html);
	}
	return $html;
};

echo $formata('[b]TreinaWeb Cursos[/b]');
*/
 
$add = function($valor) {
	return function ($outro_valor) use ($valor) {
		return $outro_valor + $valor;
	};
};

$var1 = $add(4);
echo $var1(11);