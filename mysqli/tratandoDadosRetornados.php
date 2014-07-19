<?php
/*
// Charset
header('Content-Type: text/html; charset=utf-8');

// Realiza a conexão
$conexao = mysqli_connect("localhost", "root", "root", "phpintermediario");

// Verifica se teve sucesso na conexão
if (mysqli_connect_errno()) {
	exit("Erro ao efetuar a conexão com o banco de dados.");
}

// Seleciona o funcionário de id igual a 4
$query = <<<SQL
    SELECT nome, email, telefone
    FROM funcionarios
    WHERE id=4
SQL;

$resultado = mysqli_query($conexao, $query);

/**
 * retorna dados em um array associativo ou seja 
 *Array
(
    [nome] => Gabriela
    [email] => gabriela@site.com.br
    [telefone] => (77) 7777-7777
)
 */
/*
// Trata o resultado na forma de um array associativo
$funcionario = mysqli_fetch_assoc($resultado);

// Imprime os dados do funcionário
printf("
    <b>Nome:</b> %s <br>
    <b>E-mail:</b> %s <br>
    <b>Telefone:</b> %s", $funcionario["nome"], $funcionario["email"], $funcionario["telefone"]);
    */
/**
 * retorna dados em um array completo tanto numerico como associativo ou seja
 * Array
(
    [0] => Gabriela
    [nome] => Gabriela
    [1] => gabriela@site.com.br
    [email] => gabriela@site.com.br
    [2] => (77) 7777-7777
    [telefone] => (77) 7777-7777
)
 */
/*
// Trata o resultado
$funcionario = mysqli_fetch_array($resultado);

// Imprime o resultado
print_r($funcionario);

echo '<br>';
echo $funcionario[1];
echo $funcionario[1];
*/
/**
 * Retorna em forma de um objeto, ou seja: 
 * 
 * stdClass Object
(
    [nome] => Gabriela
    [email] => gabriela@site.com.br
    [telefone] => (77) 7777-7777
)
 *//*
// Trata o resultado
$funcionario = mysqli_fetch_object($resultado);

// Imprime o resultado
print_r($funcionario);

echo "<b>Nome:</b> " . $funcionario->nome;
echo "<b>E-mail:</b> " . $funcionario->email;
*/

/**
 * tras os dados em a partir dos seus indices
 * Array
(
    [0] => Gabriela
    [1] => gabriela@site.com.br
    [2] => (77) 7777-7777
)
 */
/*
// Trata o resultado
$funcionario = mysqli_fetch_row($resultado);

// Imprime
print_r($funcionario);
*/
 /**
  * Para exibir mais de 1 codigo
  */


// Realiza a conexão
$conexao = mysqli_connect("localhost", "root", "root", "phpintermediario");

// Executa a Query
$query = <<<SQL
    SELECT nome, email
    FROM funcionarios
    WHERE nome like '%gab%'
SQL;

$resultado = mysqli_query($conexao, $query);

// Itera sobre os registros selecionados
while( $row = mysqli_fetch_assoc($resultado) ) {
	// Imprime o registro
	printf ("%s (%s) <br />", $row["nome"], $row["email"]);
}