<?php

	$server = "localhost";
	$user	= "root";
	$pass	= "";
	$db		= "mobileforce";

	$conn = mysqli_connect($server, $user, $pass);
	
	if(!$conn){
	die("Erro ligacao: ". mysqli_connect_error());
	}

	mysqli_select_db($conn, $db);
	mysqli_set_charset($conn, 'utf-8');

?>