<?php

// Inicia a sess�o
session_start();

// Valida se o usu�rio est� realmente logado
if( !isset($_SESSION["logado"]) ) {
	// Volta para o login. N�o tem acesso para visualizar esta p�gina.
	header("Location: login.php");
	exit;
}

// Logout
if( isset($_GET["acao"]) && $_GET["acao"]=="logout" ) {

	// Destr�i todos os dados da sess�o
	session_destroy();

	// Redireciona o usu�rio para o formul�rio de login
	header("Location: login.php");

}

?>
<!DOCTYPE HTML>

<html>

<head>
  <title>P�gina segura</title>
  <meta charset="UTF-8" />
</head>

<body>
    <h1 style="color: green">Parab�ns, seja bem vindo!</h1>
    <p>Voc� efetuou o login com sucesso.</p>
    <p><b>Seu e-mail �:</b> <?=$_SESSION["email"];?></p>

    <p><small><a href="?acao=logout">Logout (sair)</a></small></p>
</body>

</html>