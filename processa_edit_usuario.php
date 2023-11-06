 <?php
  session_start();
  include_once("conexao.php");

  $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
  $nome = filter_input(INPUT_POST, 'nome');
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
 
  $result_usuario = "UPDATE usuarios SET nome='$nome', email='$email', modifiq=NOW() WHERE id='$id'";
  $resultado_usuario = mysqli_query($conn, $result_usuario);
 
  if (mysqli_affected_rows($conn)){
  $_SESSION['msg'] = "<p style='color:green;'>usuario editado com sucesso</p>";

    header("Location: listar.php");
 
  } else {

    $_SESSION['msg'] = "usuario não editado com sucesso";

    header("Location: editar.php");
  }
  ?>
