<?php

$servidor = "localhost";
$banco = "nutriacaoweb";
$usuariobd = "root";
$senhabd = "";

$conect = new mysqli($servidor,$usuariobd,$senhabd, $banco);
if ($conect->connect_errno) {
	die("Falha ao conectar: ".$conect->connect_error);
}
    echo "conectado com sucesso";
?> 