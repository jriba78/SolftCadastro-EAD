 <?php
  session_start();

  include_once("conexao.php");

  $nome = filter_input(INPUT_POST, 'nome',);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
 
  // echo "Nome: $nome <br>";
   // echo "E-mail: $email <br>";
  $result_usuario = "INSERT INTO usuarios (nome, email, created) VALUES ('$nome', '$email', NOW())";
  $resultado_usuario = mysqli_query($conn, $result_usuario);
 
  if (mysqli_insert_id($conn)){
  $_SESSION['msg'] = "usuario cadastrado com sucesso";

    header("Location: index.php");

  } else {
    header("Location: index.php");
  }
  ?>
