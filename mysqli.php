<?php

/**
 * Forma porcedural: 
 */
/*
// Realiza a conexão
$conexao = mysqli_connect("localhost", "root", "clay", "phpintermediario");

// Verifica se teve sucesso na conexão
if (mysqli_connect_errno()) {
	exit("Erro ao realizar a conexão com o banco de dados.");
}

// Executa a query (consulta)
$resultado = mysqli_query($conexao, "SELECT nome, email FROM funcionarios WHERE id=1");

// Obtém o registro na forma de um array associativo chave=>valor
$funcionario = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

// Imprime os dados do funcionário
vprintf("<b>Nome:</b> %s <br> <b>E-mail:</b> %s", $funcionario);

// Garante a limpeza de toda a memória associada a este resultado
mysqli_free_result($resultado);

// Fecha a conexão com o MySQL
mysqli_close($conexao); 
*/
 

/**
 * Forma Orientada a Objeto
 */

// Realiza a conexão
$conexao = new mysqli("localhost", "root", "clay", "phpintermediario");

// Verifica se teve sucesso na conexão
if ($conexao->connect_errno) {
    exit("Erro ao realizar a conexão com o banco de dados.");
}

// Executa a query (consulta)
$resultado = $conexao->query("SELECT nome, email FROM funcionarios WHERE id=1");

// Obtém o registro na forma de um array associativo chave=>valor
$funcionario = $resultado->fetch_array(MYSQLI_ASSOC);

// Imprime os dados do funcionário
vprintf("<b>Nome:</b> %s <br> <b>E-mail:</b> %s", $funcionario);

// Garante a limpeza de toda a memória associada a este resultado
$resultado->close();

// Fecha a conexão com o MySQL
$conexao->close();