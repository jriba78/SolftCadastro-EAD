  <?php
   session_start();

   include_once("conexao.php");
 
 ?>
 <!DOCTYPE html>
 <html  long="pt-br">
	  <head>
		 <meta chart="utf-8">
		 <title>Listar</title>  
		 
	  </head>
	 <body> 
		<a href="index.php">CADASTRO</a><br>
		<a href="listar.php">Listar</a><br>
		<h1> Listar Cliente </h1>
<?php 
if (isset($_SESSION['msg'])){
	echo ($_SESSION['msg']);
	unset($_SESSION['msg']);
} 
  
 // receber o numero de pagina
 $pagina_atual = filter_input(INPUT_GET, 'pagina',
 FILTER_SANITIZE_NUMBER_INT);
 $pagina = (!empty($pagina_atual))? $pagina_atual : 1;

 //setar a quantidade de itens por pagina
 $qnt_result_pg = 3;

 // calcular o inicio da visualizacao
 $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

  
 $result_usuarios = "SELECT * FROM usuarios LIMIT $inicio, 
 $qnt_result_pg";
 $resultado_usuarios = mysqli_query($conn, $result_usuarios);
 while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
	
	echo "ID: " . $row_usuario['id'] . "<br>";
	echo "Nome: " . $row_usuario['nome'] . "<br>";
	echo "E-mail: " . $row_usuario['email'] . "<br><hr>";
	echo " <a href='edit_usuario.php?id=" . $row_usuario['id'] . "'>Editar</a> <br><hr>";

 }
	//echo $row_pg['num_result'];
	//quantide de pagina

	$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

	// limitar os links antes depois
	$max_links = 2;
	    echo "<a href='listar.php?pagina=1'> Primeira </a>";

		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++ ){

			if($pag_ant >= 1){

			 echo "<a href='listar.php?pagina=$pag_ant'> $pag_ant </a>";
     }
	}
     
	 echo "$pagina ";

     for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++ ){

		echo "<a href='listar.php?pagina=$pag_dep'> $pag_dep</a>";
	 }

     echo "<a href='listar.php?pagina=$quantidade_pg'> Ultima </a>";
	

	?>

	 </body>
 </html>
      
