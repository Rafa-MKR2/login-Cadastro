<?php
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	
	$banco = "banco";
	
	$conexao = mysql_connect($host,$user,$pass) or die(msql_error());
	
	mysql_select_db($banco) or die(mysql_error());

?>
