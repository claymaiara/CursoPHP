<?php

// Charset
header('Content-Type: text/html; charset=utf-8');

// Realiza a conexão com o banco de dados MySQL
mysql_connect('localhost', 'root', 'root');

mysql_close($link);

// Seleciona a base de dados que será usada
mysql_select_db("phpintermediario");

// Realiza uma consulta
$query = mysql_query("SELECT * FROM funcionarios WHERE id=3");

// Trata o resultado na forma de um array associativo
$resultado = mysql_fetch_assoc($query);

// Imprime o resultado
vprintf("<b>Id:</b> %d <br />
        <b>Nome:</b> %s <br />
        <b>E-mail:</b> %s <br />
        <b>Endereço:</b> %s <br />
        <b>Tel:</b> %s", $resultado);

// Fecha a conexão com o MySQL
mysql_close();
?>