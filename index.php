<?php
session_start();

?>
 
 <!DOCTYPE html>
 <html  long="pt-br">
	  <head>
		 <meta chart="utf-8">
		 <title>CADASTRO</title>  
		 
	  </head>
	 <body> 
	    <a href="index.php">CADASTRO</a><br>
		<a href="listar.php">Listar</a><br>
		<h1> CADASTRO DE CLIENTE </h1>
<?php
if (isset($_SESSION['msg'])){

	echo ($_SESSION['msg']);
	unset($_SESSION['msg']);
}
?>
		<form method="POST" action="painel.php">
			<label>Name: </label>
			<input type="text" name="nome" placeholder="Digite o seu nome completo"><br><br>

			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu email"><br><br>
			
			<input type="submit" value="Cadastrar">
		</form>
			
	 </body>
 </html>
      
