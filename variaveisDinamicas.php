<?php

/**
*Exemplos de variaveis dinamicas, 
 */
$var= "algumacoisa";
$$var = "TreinaWeb Cursos";

echo $algumacoisa; //o nome tem que ser sempre igual ao texto que foi atribuido na $var

echo '<br> <br> ********** Exemplo com array   ********** <br> <br> ';
// O array dos dados
$dados = array(
		'nome' => 'TreinaWeb',
		'email' => 'treinaweb@treinaweb.com.br',
		'telefone' => '99-9999-9999',
		'site' => 'http://www.treinaweb.com.br'
);

foreach( $dados as $chave => $valor )
{
	// Cria a vari�vel din�mica com o nome da respectiva chave do array
	$$chave = $valor;
}

// Acessa as vari�veis criadas dinamicamente
echo $nome . "<br>";
echo $email . "<br>";
echo $telefone . "<br>";
echo $site;

/**
 * Exemplo de fun��o dinamicas: 
 */
echo '<br> <br> Fun��o dinamica: <br><br> ';

function fatorial()
{
	echo "Fatorial executada.";
}

$func = "fatorial";
$func();

echo strlen("HIDROXIDO DE FERRO III 20MG/ML SOL INJ IV 5ML");