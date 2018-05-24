
<?php
	
	include 'db_conexao.php';
		
	$nome=$_POST['nomeCad'];
	$sobrenome=$_POST['sobreNomeCad'];
	$email=$_POST['emailCad'];
	$senha=$_POST['senhaCad'];
	
	

	// Analisa se email cadastrado já existe no banco de dados
	
	$query_select = "SELECT * FROM usuario WHERE email = '$email'";
	$select = mysql_query($query_select);
	$array_tabela = mysql_fetch_array($select);
	
	$CheckEmail = $array_tabela['email'];
	
	if($CheckEmail == $email){
		
		echo "<script> alert('Esse E-mail já foi cadastrado!');  window.history.back();</script>";
		die();
	
		}
		
	if($senha<6){
		
		echo "<script>alert('Senha precisa de 6 Caractere!');  window.history.back();</script>";
				die();
				
		}else{
			
		$sql = mysql_query("INSERT INTO usuario(nome,sobrenome, email, senha) VALUES('$nome','$sobrenome','$email','$senha')");
			echo "<script>Alert('Cadastrado com sucesso'); </script> <meta HTTP-EQUIV='Refresh' CONTENT='0.1; URL=http://localhost/serve/login/'>";
	
	}
?>