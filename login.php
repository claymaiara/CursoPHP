<?php

    // Inicia a sessão
    session_start();

    // Verifica se o formulário foi postado
    if( $_POST ) {

        // Os dados de login conferem
        if($_POST["email"]=="teste@site.com.br" && $_POST["senha"]=="123") {

            // Cria uma sessão que identifica se o usuário efetuou o login
            $_SESSION["logado"] = TRUE;

            // Armazena na sessão o e-mail do usuário logado
            $_SESSION["email"] = $_POST["email"];

            // Redireciona o usuário para a página "segura"
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