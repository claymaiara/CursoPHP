<?php
/**
 * Fun��o exemplo por referencia: 
 */
/**
// Informa ao navegador o charset deste conte�do
header('Content-Type: text/html; charset=utf-8');

// Array
$cursos = array(
		3 => "PHP Intermedi�rio",
		1 => "PHP B�sico",
		7 => "PHP Orientado a Objetos",
		4 => "PHP Avan�ado"
);

// Ordena o array pelas chaves em ordem crescente
ksort($cursos);

// Imprime o Array
var_dump($cursos);*/ 

/**
 * Minha Fun��o por referencia que remove um item: 
 */

function removeItem (&$array, $item ){
	
	if(isset($array[$item])){
		unset($array[$item]);
	}else 
		return false;
	
	return true;
}

$frutas = array("banana", "maca", "uva", "abacaxi", "pera");
$pessoas =array(
		"joao" => array(
				"idade" => 20,
				"altura" => 1.70
		),
		"maria" => array(
				"idade" => 30,
				"altura" => 1.60
		),
		"vera" => array(
				"idade" => 40,
				"altura" => 1.50
		)
		
);

#var_dump($frutas);

if(removeItem($frutas,"1")){
	var_dump($frutas);
}else 
	echo '<br> Valor n�o existe no array!';

echo '<br> **************** Array Pessoas ****************** <br>';

if(removeItem($pessoas,"maria")){
	var_dump($pessoas);
}else
	echo '<br> Pessoa nao encontrada!';


/**
 * Fun��o de exemplo do curso remove um item 
 */
/*
// Informa ao navegador o charset deste conte�do
header('Content-Type: text/html; charset=utf-8');

// Define a fun��o
function removeChave(&$array, $item)
{
	if( isset($array[$item]) )
		unset($array[$item]);
	else
		return FALSE;

	return TRUE;
}

// Define o array
$carros = array(
		"uno" => array(
				"ano" => 2013,
				"motor" => 1.0
		),
		"vectra" => array(
				"ano" => 2009,
				"motor" => 1.6
		),
		"hb20" => array(
				"ano" => 2013,
				"motor" => 1.6
		)
);

if( removeChave($carros, "uno") ) {
	// Imprime o array $carros modificado
	var_dump($carros);
} else {
	echo "O valor informado n�o existe no Array.";
}	*/