<?php 
header('Content-Type: text/html; charset=utf-8');


/**
 * Faça um exercicio ondea expressão aceite dominios com hífen em se nome.
 * exemplo: www.treinaweb-cursos.com.br POSIX
 * 
 * resposta: ^(www\.)?([a-zA-Z]|-){2,}\.com(\.br)?$
 * 
 * Exemplos POSIX:
 */
/*
$hora = '12:59';
$regex = '/^[0-9]{2}:[0-9]{2}$/';

if(preg_match($regex, $hora)) {
	echo "Passou.";
}



$hora = '12:59';
$regex = '/^[[:digit:]]{2}:[[:digit:]]{2}$/';

if(preg_match($regex, $hora)) {
    echo "Passou.";
}
*/

