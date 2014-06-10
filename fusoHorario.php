<?php
header('Content-Type: text/html; charset=utf-8');

#Exemplo de fuso horario
/*
date_default_timezone_set("America/Sao_Paulo");

$data = new DateTime("now");
echo $data->format("d/m/Y H:i:s");




$data = new DateTime("now");
echo "<br /> <br /> No Brasil são: " . $data->format("H:i:s") . "<br>";

$data = new DateTime("now", new DateTimeZone('Australia/Sydney'));
echo "Em Sidney, na Austrália são: " . $data->format("H:i:s") . "<br> <br>";
*/
/**
 * Também pode-se fazer isso:
 * 
 * 		$fusoHorario = new DateTimeZone('Australia/Sydney');
 *		$data = new DateTime("now", $fusoHorario);
 *
 */


/**
 * Calculo entre datas
 */
 
echo ' /******************************** Calculo entre datas *****************************/ <br><br> ';

#Exemplo de calculo entre datas
/*
$data1 = new DateTime("2013-03-12");
$data2 = new DateTime("2013-04-03");

$diferenca = $data1->diff($data2);

#var_dump($diferenca); //mostra o array inteiro da comparação
echo $diferenca->d . " dias";
#echo $diferenca->days . " dias"; //tbm pode ser feito assim
*/
/**
 * Calculo entre horas
 */
/*
$hora1 = new DateTime("12:10:10");
$hora2 = new DateTime("16:20:10");

$diferenca = $hora1->diff($hora2);

$dados = array(
		$diferenca->h,
		$diferenca->i,
		$diferenca->s
);

vprintf(" <br> %d horas, %d minutos e %d segundos", $dados);


echo '<br> '.strtotime("-1 day");
*/
/*

$data1 = new DateTime();
$data1->setTimestamp(1363316400);

$data2 = new DateTime();
$data2->setTimestamp(1364266800);

$diferenca = $data1->diff($data2);

#var_dump($diferenca);
echo $diferenca->d . " dias"; 
*/

/**
 * Outros Metodos da DateTime
 */

$data = new DateTime();
$data->setDate(2013, 03, 20);
$data->setTime(10, 20, 15);

echo $data->format("d/m H:i:s"). '<br>'; // 20/03 10:20:15
echo $data->format("d/m/Y"). '<br>'; // 20/03/2013
echo $data->getTimestamp(). '<br>'; // 1363785615
#var_dump($data);

/**
 * Modify
 */

$data = new DateTime();
$data->modify("+2 day");

echo $data->format("d/m/Y"). '<br>'; // A data daqui 2 dias.


$data = new DateTime();
$data->setDate(2013, 03, 20);
$data->setTime(10, 20, 15);

$data->modify("-2 days");

echo $data->format("d/m/Y"); // 18/03/2013









