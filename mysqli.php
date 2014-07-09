<?php

/**
 * Forma porcedural: 
 */
/*
// Realiza a conex�o
$conexao = mysqli_connect("localhost", "root", "clay", "phpintermediario");

// Verifica se teve sucesso na conex�o
if (mysqli_connect_errno()) {
	exit("Erro ao realizar a conex�o com o banco de dados.");
}

// Executa a query (consulta)
$resultado = mysqli_query($conexao, "SELECT nome, email FROM funcionarios WHERE id=1");

// Obt�m o registro na forma de um array associativo chave=>valor
$funcionario = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

// Imprime os dados do funcion�rio
vprintf("<b>Nome:</b> %s <br> <b>E-mail:</b> %s", $funcionario);

// Garante a limpeza de toda a mem�ria associada a este resultado
mysqli_free_result($resultado);

// Fecha a conex�o com o MySQL
mysqli_close($conexao); 
*/
 

/**
 * Forma Orientada a Objeto
 */

// Realiza a conex�o
$conexao = new mysqli("localhost", "root", "clay", "phpintermediario");

// Verifica se teve sucesso na conex�o
if ($conexao->connect_errno) {
    exit("Erro ao realizar a conex�o com o banco de dados.");
}

// Executa a query (consulta)
$resultado = $conexao->query("SELECT nome, email FROM funcionarios WHERE id=1");

// Obt�m o registro na forma de um array associativo chave=>valor
$funcionario = $resultado->fetch_array(MYSQLI_ASSOC);

// Imprime os dados do funcion�rio
vprintf("<b>Nome:</b> %s <br> <b>E-mail:</b> %s", $funcionario);

// Garante a limpeza de toda a mem�ria associada a este resultado
$resultado->close();

// Fecha a conex�o com o MySQL
$conexao->close();