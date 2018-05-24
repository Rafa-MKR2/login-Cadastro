  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<div class="container">

<?php
	include 'db_conexao.php';
	
	
	$nomeResgatar=$_POST['NomeRecupe'];	
	$email=$_POST['emailRecupera'];
	
	if(!isset($email) || !isset($nomeResgatar)){
			echo '<meta HTTP-EQUIV="Refresh" CONTENT="0.1; URL=http://localhost/serve/login/">';
			exit;

	}
	
	
	
	$check = mysql_query("SELECT * FROM usuario WHERE nome = '$nomeResgatar' AND email = '$email'") or die(mysql_error());
	
	
while($linha = mysql_fetch_array($check)){
				$nome = $linha["nome"];
				$sobrenome = $linha["sobrenome"];
				$emailR = $linha["email"];
}

	
	$row = mysql_num_rows($check);
	
	
	
	
	
	if($row > 0 ){
			
	echo "<center><h1>Aguardando Codigo...</h1></center>
	<br><p>Codigo de acesso foi enviado para Seu E-mail,</p>
	";
	
		echo "
		<table class='table table-bordered table-hover'>
					<thead>
						<tr>
							<th>Nome</th>
							<th>Sobrenome</th>
							<th>E-mail</th>
							<th>Codigo</th>
						</tr>
				</thead>";	
		
					echo "
					<tbody id='tabela-competidor'>
						<tr class='competidor' >
							<td class='nome'>".$nome."</td>
							<td class='sobrenome'>".$sobrenome."</td>
							<td class='sobrenome'>".$email."</td>
							<td class='sobrenome'><input type='numeber' maxlenth='10' value='' placeholder='Numero de acesso'></td>
						</tr>
						</table>
						<br>
						";	
				echo "<br><center>
				<h4 style='color:red;'> Atenção Codigo expira em 2 horas</h4>
				<br>
				<button class='btn btn-success'>Confirma Codigo</button></center>
				";
				
		
	}else{
			
	echo "<script> alert('Não foi possivel localizar seu login');</script>";
	echo "<center><h1>Não existe resgistro relacionados</h1></center>";
	
	}
?>


</div>