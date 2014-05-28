<?php 
header('Content-Type: text/html; charset=utf-8');

/**
 * ExeMplo de espressões regulares PCRE com preg_math
 */

/*
$nome = 'jonny_PHP2014';
//$regex = '/^[a-zA-Z0-9_]{5,20}$/';
//$regex = '/^[a-z0-9_]{5,20}$/i'; //i indica que não existe diferença entre maiusculo e maiusculo
$regex = '/^[a-z\d_]{5,20}$/i'; // \d indica que pode usar qualquer numero 

if(preg_match($regex, $nome)) {
    echo "Nome de usuário válido.";
}
*/
/*
$nome = 'TreinaWeb Cursos';
$regex = '/(\w+)\s(\w+)/i';
if(preg_match($regex, $nome, $array)) {
	print_r($array);
}

*/
/*
$data = '2014-06-07';
$regex = '/(\d{4})-(\d{2})-(\d{2})/';

if(preg_match($regex, $data, $resultado)) {
	echo "Dia: " . $resultado["3"] . "<br>";
	echo "Mês: " . $resultado["2"] . "<br>";
	echo "Ano: " . $resultado["1"];
}
*/
/*
$nome = 'TreinaWeb Cursos';
$regex = '/(?P<nome>\w+)\s(?P<sobrenome>\w+)/i';

if(preg_match($regex, $nome, $array)) {
	print_r($array);
}*/


/*
$telefone = '(99) 99999-9999';
$regex = '/^(\(?[0-9]{2}\)?[ ]?[0-9]{4,5}[ -]?[0-9]{4})$/';

if(preg_match($regex, $telefone)) {
	echo "Passou.";
}
*/

$email = 'contato@treinaweb.com.br';
$regex = '/^[^0-9][a-z0-9_]+([.][a-z0-9_]+)*[@][a-z0-9-_]+([.][a-z0-9]{2,3})*[.][a-z]{2,3}$/i';
//$regex = ^[^0-9][a-z0-9_]+([.][a-z0-9_]+)*[@][a-z0-9-_]+([.](com|org|net|edu|gov))$; //validação alternativa

if(preg_match($regex, $email)) {
	echo "Passou.";
}
?>
