<?php
/*
// Charset
header('Content-Type: text/html; charset=utf-8');

// Realiza a conexão
$conexao = mysqli_connect("TESTE", "root", "root", "phpintermediario");

// Verifica se teve sucesso na conexão
/*
if (mysqli_connect_errno()) {
    exit("<b>Código:</b> " . mysqli_connect_errno() . ". <b>Descrição:</b> " . mysqli_connect_error());
}

if (mysqli_connect_errno()) {
    exit("Erro ao efetuar a conexão com o banco de dados.");
}


// Charset
header('Content-Type: text/html; charset=utf-8');

// Realiza a conexão
$conexao = mysqli_connect("localhost", "root", "root");

// Seleciona a base de dados
mysqli_select_db($conexao, "phpintermediario");

// Verifica se teve sucesso na conexão
if (mysqli_connect_errno()) {
	exit("Erro ao efetuar a conexão com o banco de dados.");
}
*/


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
    WHERE id=2
SQL;

$resultado = mysqli_query($conexao, $query);

// Trata o resultado na forma de um array associativo
$funcionario = mysqli_fetch_assoc($resultado);

// Imprime os dados do funcionário
printf("
    <b>Nome:</b> %s <br>
    <b>E-mail:</b> %s <br>
    <b>Telefone:</b> %s", $funcionario["nome"], $funcionario["email"], $funcionario["telefone"]);