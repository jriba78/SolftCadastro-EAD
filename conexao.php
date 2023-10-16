<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "bdCliente";

# Criar conexão

$mysqli = new mysqli($servidor, $usuario, $senha, $dbname);

if ($mysqli->connect_error) {
    
   
die("Falha ao conectar: " . $mysqli->connect_error);
}
?>
