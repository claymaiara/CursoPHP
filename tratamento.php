<?php
/*
$id = $_GET["id"];

echo "SELECT nome, email FROM funcionarios WHERE id={$id}";
*/


$id = ( isset($_GET["id"]) ) ? (int) $_GET["id"] : 0;

if( $id!==0 ) {
	echo "SELECT nome, email FROM funcionarios WHERE id={$id}";
}