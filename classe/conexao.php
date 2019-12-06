<?php

$host = "localhost";
$usuario = "sistec31_admin";
$senha = "Galodoido22";
$bd = "sistec31_farol";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno)
	echo "Falha na conexão (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>