<?php

/**
 * Exemplo sem função anonima
 * @param unknown $valor
 * @return boolean
 */
/*
function filtraArray($valor) {
	return ($valor > 8);
}

$valores = array(6, 7, 8, 9, 10, 3, 2, 11, 12);

// Filtra o Array removendo todos os valores menores que 8
$novosValores = array_filter($valores, "filtraArray");

// Imprime o novo array
print_r( $novosValores );
*/
 

/**
 * Mesmo exemplo de cima, com função anonima
 * utilizado a partir da versão PHP 5.3
 */
/*
$entrada = array(6, 7, 8, 9, 10, 3, 2, 11, 12);
$saida = array_filter($entrada, function($v){ return $v > 8; });

// Imprime o novo array
print_r( $saida );
*/

/**
 * Criando função com definição pre definida
 */
/*
$entrada = array(6, 7, 8, 9, 10, 3, 2, 11, 12);

$saida = array_filter($entrada, function(&$v){
	if($v<8) {
		$v *= 20;
	}
	return $v;
});

	// Imprime o novo array
	print_r( $saida );
*/
 
/**
 * Exemplo de função anonima dentro de uma variavel
 */

$saudacao = function($str) {
	return "Hello World, {$str}!";
};

echo $saudacao("boa noite");
