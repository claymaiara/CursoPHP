<?php
/*
// Realiza a conex�o
$conexao = mysqli_connect("localhost", "root", "clay", "phpintermediario");

// Executa a Query
$query = <<<SQL
    SELECT nome, email
    FROM TESTE_TABELA
    WHERE nome like '%gab%'
SQL;

$resultado = mysqli_query($conexao, $query);

/*
if($resultado===FALSE) {
	exit("Erro ao consultar o dado.");
}
*/

/**
 * Fun��o que apresenta erro do mysqli
 */
/*
if($resultado===FALSE) {
	exit("Erro: " . mysqli_error($conexao));
}
*/
/**
 * Utiliza��o da fun��o mysqli_insert_id()
 */ 
/*
// Charset
header('Content-Type: text/html; charset=utf-8');

// Realiza a conex�o
$conexao = mysqli_connect("localhost", "root", "clay", "phpintermediario");

// Executa a Query
$query = <<<SQL
    INSERT INTO funcionarios(nome, email, endereco, telefone)
    VALUES('Felipe', 'felipe@site.com.br', 'Rua 10.', '(55) 5555-5555')
SQL;

$resultado = mysqli_query($conexao, $query);

if($resultado===TRUE) {
	echo 'Funcion�rio cadastrado com sucesso. Id: ' . mysqli_insert_id($conexao);
} else {
	echo 'Erro ao cadastrar o funcion�rio.';
}
*/
 
/**
 * Exemplo alterar um registro
 */
/*
// Charset
header('Content-Type: text/html; charset=utf-8');

// Realiza a conex�o
$conexao = mysqli_connect("localhost", "root", "clay", "phpintermediario");

// Executa a Query
$query = <<<SQL
    UPDATE funcionarios
    SET nome='Felipe Vaz', email='felipe.vaz@site.com.br'
    WHERE id=8
SQL;

$resultado = mysqli_query($conexao, $query);

if($resultado===TRUE) {
	echo 'Cadastrado atualizado com sucesso.';
} else {
	echo 'Erro ao atualizar.';
}
*/
/**
 * Exemplo deletar um registro
 */
/*
// Charset
header('Content-Type: text/html; charset=utf-8');

// Realiza a conex�o
$conexao = mysqli_connect("localhost", "root", "clay", "phpintermediario");

// Executa a Query
$query = <<<SQL
    DELETE FROM funcionarios
    WHERE id=8
SQL;

$resultado = mysqli_query($conexao, $query);

if($resultado===TRUE) {
	echo 'Cadastrado atualizado com sucesso.';
} else {
	echo 'Erro ao atualizar.';
}
*/
 /**
  *  utiliza��o da fun��o mysql_affected_rows()
  *  mostra quantas linhas foram afetadas 
  */
/*
// Realiza a conex�o
$conexao = mysqli_connect("localhost", "root", "clay", "phpintermediario");

// Executa a Query
$query = <<<SQL
    UPDATE funcionarios
    SET telefone='(22) 2222-222'
    WHERE telefone='(99) 9999-9999'
SQL;

$resultado = mysqli_query($conexao, $query);

if($resultado===TRUE) {
	printf("%d registros atualizados.", mysqli_affected_rows($conexao));
}
*/
  /**
   * Fun��o mysqli_num_rows()
   * retorna a quantidade de linhas retornadas
   */
/*
// Realiza a conex�o
$conexao = mysqli_connect("localhost", "root", "clay", "phpintermediario");

// Seleciona os funcion�rios cujos nomes come�am com a letra 'g'
$query = <<<SQL
    SELECT nome, email
    FROM funcionarios
    WHERE nome LIKE 'g%'
SQL;

$resultado = mysqli_query($conexao, $query);

if($resultado!==FALSE) {
	printf("%d registros selecionados.", mysqli_num_rows($resultado));
}
*/
  /**
   * EX usando o for, mas � mais recomendavel usar o while
   */
/*
// Realiza a conex�o
$conexao = mysqli_connect("localhost", "root", "clay", "phpintermediario");

// Seleciona os funcion�rios cujos nomes come�am com a letra 'g'
$query = <<<SQL
    SELECT nome, email
    FROM funcionarios
    WHERE nome LIKE 'g%'
SQL;
$resultado = mysqli_query($conexao, $query);

// Obt�m a quantidade de registros selecionados
$quantidade_registros = mysqli_num_rows($resultado);

// Itera sobre os registros
for($i=0; $i<$quantidade_registros; $i++) {
	$funcionario = mysqli_fetch_assoc($resultado);
	vprintf("<b>Nome:</b> %s <br /><b>E-mail:</b> %s <br /><br />", $funcionario);
}
*/
/**
 * Mesmo ex usando o While, que � mais recomendavel usar
 */

// Realiza a conex�o
$conexao = mysqli_connect("localhost", "root", "clay", "phpintermediario");

// Seleciona os funcion�rios cujos nomes come�am com a letra 'g'
$query = <<<SQL
    SELECT nome, email
    FROM funcionarios
    WHERE nome LIKE 'g%'
SQL;
$resultado = mysqli_query($conexao, $query);

// Itera sobre os registros
while($row = mysqli_fetch_assoc($resultado)) {
	vprintf("<b>Nome:</b> %s <br /><b>E-mail:</b> %s <br /><br />", $row);
}
