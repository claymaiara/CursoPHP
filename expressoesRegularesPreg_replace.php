<?php 
header('Content-Type: text/html; charset=utf-8');

/**
 * ExeMplo de espress�es regulares PCRE com preg_replace
 */

/*
$string = 'Os cachorros s�o engra�ados!';
$expressao = '/cachorros/';
$substituir = "<b>gatos</b>";

// Imprime
echo preg_replace($expressao, $substituir, $string);
*/

/*
$string = '12:30';
$expressao = '/^([\d]{2}):([\d]{2})$/';
$substituir = "<span style='color:blue'>$1</span>:<span style='color:green'>$2</span>";

// Imprime
echo preg_replace($expressao, $substituir, $string);
*/
/*

$post = <<<'TEXT'
Ol�, [b]pessoal[/b]! [br][br]

Para iniciar o servi�o do [i]MongoDB[/i] no Windows acesse: [br][br]

[img]\images\win-services.png[/img] [br][br]

No pr�ximo artigo veremos estes t�picos:
[br]

[ul]
[li]Criar uma base de dados[/li]
[li]Criar tabelas[/li]
[li]Consultar dados[/li]
[/ul]

At� a pr�xima!
TEXT;

// Express�es que casam os trechos que ser�o substitu�dos
$expressoes = array(
		"/\[br]/",
		"/\[b](.*?)\[\/b]/",
		"/\[i](.*?)\[\/i]/",
		"/\[img](.*?)\[\/img]/",
		"/\[ul\]([\s\S]*?)\[\/ul\]/",
		"/\[li](.*?)\[\/li]/",
);

// Novo conte�do
$substituir = array(
		"<br />",
		"<b>$1</b>",
		"<i>$1</i>",
		"<img src=\"$1\" />",
		"<ul>$1</ul>",
		"<li>$1</li>"
);

// Imprime o HTML resultante
echo preg_replace($expressoes, $substituir, $post);
*/
/*
$string = 'dog dog dog dog dog dog';
$expressao = '/dog/';
$substituir = "cat";

// Imprime
echo preg_replace($expressao, $substituir, $string, 3);
*/

$string = 'dog dog bird bird fish fish fish';
$expressao = '/dog/';
$substituir = "cat";

// Imprime
echo preg_replace($expressao, $substituir, $string, 4, $contador);

echo "<br>N�mero de substitui��es realizadas: {$contador}";
?>