<?php

	include("../Database/connection.php");

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$nome = $_POST['nome'];
	$raca = $_POST['raca'];
	$classe = $_POST['classe'];

	$con = getConnection();

	$query = "INSERT INTO usuario (login,senha,nome,raca,classe) 
	VALUES ('$login','$senha','$nome','$raca','$classe')";

	if(pg_query($con,$query)){
		echo "foi";
	}else{
		echo "não foi";
	}

	?>

