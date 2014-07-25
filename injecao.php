<?php

// Realiza a conexão
$conexao = mysqli_connect("localhost", "root", "clay", "phpintermediario");

// Recebe o id do funcionário via $_GET
#$id = $_GET["id"];
#$id = (int) $_GET["id"];
// Recebe o id do funcionário via $_GET
$id = mysqli_real_escape_string($conexao, $_GET["id"]);
// Recupera os dados desse funcionário
$query = <<<SQL
    SELECT nome, email
    FROM funcionarios
    WHERE id={$id}
SQL;

$resultado = mysqli_query($conexao, $query);
if($resultado!==FALSE) {
	// Imprime os dados do funcionário
	while($row = mysqli_fetch_assoc($resultado)) {
		vprintf("<b>Nome:</b> %s <br /><b>E-mail:</b> %s <br /><br />", $row);
	}
}
/*
// Imprime os dados do funcionário
while($row = mysqli_fetch_assoc($resultado)) {
    vprintf("<b>Nome:</b> %s <br /><b>E-mail:</b> %s <br /><br />", $row);
}
*/