<?php

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

</html>