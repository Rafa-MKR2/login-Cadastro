

<?php
	include 'db_conexao.php';
	
	
	
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	
	$check = mysql_query("SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'") or die(mysql_error());
	
	
	while($linha = mysql_fetch_array($check)){
				$id = $linha["ID"];
				$nome = $linha["nome"];
				
		
	}

	
	$row = mysql_num_rows($check);
	
	
	
	
	
	if($row > 0 ){
		
		session_start();
		
		$_SESSION["nome"]=$nome;
		$_SESSION["email"]=$_POST["email"];
		$_SESSION["senha"]=$_POST["senha"];
		
		header("Location: ../log/index.html");
		
	}else{
		
		header("Location: ../index.html");

		exit;

	}
?>