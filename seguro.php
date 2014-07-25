<?php

// Inicia a sessão
session_start();

// Valida se o usuário está realmente logado
if( !isset($_SESSION["logado"]) ) {
	// Volta para o login. Não tem acesso para visualizar esta página.
	header("Location: login.php");
	exit;
}

// Logout
if( isset($_GET["acao"]) && $_GET["acao"]=="logout" ) {

	// Destrói todos os dados da sessão
	session_destroy();

	// Redireciona o usuário para o formulário de login
	header("Location: login.php");

}

?>
<!DOCTYPE HTML>

<html>

<head>
  <title>Página segura</title>
  <meta charset="UTF-8" />
</head>

<body>
    <h1 style="color: green">Parabéns, seja bem vindo!</h1>
    <p>Você efetuou o login com sucesso.</p>
    <p><b>Seu e-mail é:</b> <?=$_SESSION["email"];?></p>

    <p><small><a href="?acao=logout">Logout (sair)</a></small></p>
</body>

</html>