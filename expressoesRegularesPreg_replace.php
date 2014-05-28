<?php 
header('Content-Type: text/html; charset=utf-8');

/**
 * ExeMplo de espressões regulares PCRE com preg_replace
 */

/*
$string = 'Os cachorros são engraçados!';
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
Olá, [b]pessoal[/b]! [br][br]

Para iniciar o serviço do [i]MongoDB[/i] no Windows acesse: [br][br]

[img]\images\win-services.png[/img] [br][br]

No próximo artigo veremos estes tópicos:
[br]

[ul]
[li]Criar uma base de dados[/li]
[li]Criar tabelas[/li]
[li]Consultar dados[/li]
[/ul]

Até a próxima!
TEXT;

// Expressões que casam os trechos que serão substituídos
$expressoes = array(
		"/\[br]/",
		"/\[b](.*?)\[\/b]/",
		"/\[i](.*?)\[\/i]/",
		"/\[img](.*?)\[\/img]/",
		"/\[ul\]([\s\S]*?)\[\/ul\]/",
		"/\[li](.*?)\[\/li]/",
);

// Novo conteúdo
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

echo "<br>Número de substituições realizadas: {$contador}";
?>