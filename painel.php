<?php
    include_once("conexao.php");

    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    $result_usuario = "INSERT INTO usuarios (nome, email, created) VALUES ('$nome', '$email', NOW())";
    $resultado_usuario = mysqli_query($mysqli, $result_usuario);
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <link href="style/style.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <h1>Cliente Cadastrado com sucesso!</h1>
</body>
</html>
