<?php
/*
    // Inicia a sess�o
    session_start();

    // Verifica se o formul�rio foi postado
    if( $_POST ) {

        // Os dados de login conferem
        if($_POST["email"]=="teste@site.com.br" && $_POST["senha"]=="123") {

            // Cria uma sess�o que identifica se o usu�rio efetuou o login
            $_SESSION["logado"] = TRUE;

            // Armazena na sess�o o e-mail do usu�rio logado
            $_SESSION["email"] = $_POST["email"];

            // Redireciona o usu�rio para a p�gina "segura"
            header("Location: seguro.php");

        }

    }

?>
<!DOCTYPE HTML>

<html>

<head>
  <title>Login</title>
  <meta charset="UTF-8" />
</head>

<body>
    <form action="login.php" method="post">
        <p>
            <label for="email">E-mail: </label>
            <input type="text" id="email" name="email">
        </p>
        <p>
            <label for="senha">Senha: </label>
            <input type="text" id="senha" name="senha">
        </p>
        <button type="submit">Entrar</button>
    </form>
</body>

</html>*/
/**
 * Exemplo com cookies
 */


// Inicia a sess�o
session_start();

// Verifica se o formul�rio foi postado
if( $_POST ) {

	// Os dados de login conferem
	if($_POST["email"]=="teste@site.com.br" && $_POST["senha"]=="123") {

		// Cria uma sess�o que identifica que o usu�rio efetuou o login
		$_SESSION["logado"] = TRUE;

		// Armazena na sess�o o e-mail do usu�rio logado
		$_SESSION["email"] = $_POST["email"];

		// Armazena o e-mail do usu�rio em um cookie v�lido por 48 horas
		setcookie("usuarioEmail", $_POST["email"], time()+172800);

		// Redireciona o usu�rio para a p�gina "segura"
		header("Location: seguro.php");

	}

}

// Se existir o cookie com o e-mail do usu�rio, armazena na vari�vel
$usuarioEmail = (isset($_COOKIE["usuarioEmail"])) ? $_COOKIE["usuarioEmail"] : "";

?>
<!DOCTYPE HTML>

<html>

<head>
  <title>Login</title>
  <meta charset="UTF-8" />
</head>

<body>
    <form action="login.php" method="post">
        <p>
            <label for="email">E-mail: </label>
            <input type="text" id="email" name="email" value="<?=$usuarioEmail;?>">
        </p>
        <p>
            <label for="senha">Senha: </label>
            <input type="text" id="senha" name="senha">
        </p>
        <button type="submit">Entrar</button>
    </form>
</body>

</html>