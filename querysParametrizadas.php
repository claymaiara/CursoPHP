<?php
/*
// Realiza a conexão
$conexao = mysqli_connect("localhost", "root", "clay", "phpintermediario");

// Obtém a instância do objeto 'mysqli_stmt' que é o "cabeça-chave" do trabalho com as Querys parametrizadas
$stmt = mysqli_stmt_init($conexao);

// Prepara a Query
if (mysqli_stmt_prepare($stmt, "SELECT nome, email FROM funcionarios WHERE id=?")) {

    // Relaciona um valor ao argumento '?' da Query
    mysqli_stmt_bind_param($stmt, "i", $_GET["id"]);

    // Executa a query parametrizada
    mysqli_stmt_execute($stmt);

    // Define as variáveis que irão receber o resultado
    mysqli_stmt_bind_result($stmt, $nome, $email);

    // Processa o resultado nas variáveis informadas acima
    mysqli_stmt_fetch($stmt);

    // Imprime os dados do funcionário
    echo "Nome: {$nome} ({$email})";

    // Termina o trabalho com a query parametrizada
    mysqli_stmt_close($stmt);

}
*/

/**
 * Mostrando mais de 1 registro
 */

/*
// Realiza a conexão
$conexao = mysqli_connect("localhost", "root", "clay", "phpintermediario");

// Obtém a instância do objeto 'mysqli_stmt' que é o "cabeça-chave" do trabalho com as Querys parametrizadas
$stmt = mysqli_stmt_init($conexao);

// Prepara a Query
$query = "SELECT nome, email, endereco FROM funcionarios WHERE nome LIKE ?";

if (mysqli_stmt_prepare($stmt, $query)) {

	// Relaciona ao '?' da query a estrutura de consulta do LIKE
	$consulta = '%' . $_GET["nome"] . '%';
	mysqli_stmt_bind_param($stmt, 's', $consulta);

	// Executa a query parametrizada
	mysqli_stmt_execute($stmt);

	// Define as variáveis que irão receber o resultado
	mysqli_stmt_bind_result($stmt, $nome, $email, $endereco);

	// Itera sobre os registros selecionados
	while (mysqli_stmt_fetch($stmt)) {
		echo "Nome: {$nome} ({$email}) | {$endereco} <br>";
	}

		// Termina o trabalho com a query parametrizada
		mysqli_stmt_close($stmt);
}
*/
 /**
  * Exemplo para inserir dados
  */

// Realiza a conexão
$conexao = mysqli_connect("localhost", "root", "clay", "phpintermediario");

// Obtém a instância do objeto 'mysqli_stmt'
$stmt = mysqli_stmt_init($conexao);

// Prepara a Query
$query = "INSERT INTO funcionarios (nome, email, endereco, telefone) VALUES (?, ?, ?, ?)";

if (mysqli_stmt_prepare($stmt, $query)) {

	// Define os dados do funcionário a ser inserido
	$nome = "Daniel";
	$email = "daniel@site.com.br";
	$endereco = "Rua leste.";
	$telefone = "(33) 3333-3333";

	// Define os valores para os argumentos
	mysqli_stmt_bind_param($stmt, 'ssss', $nome, $email, $endereco, $telefone);

	// Executa a query
	if(mysqli_stmt_execute($stmt)) {
		echo "Cadastro realizado com sucesso.";
	}

	// Termina o trabalho com a query
	mysqli_stmt_close($stmt);

}