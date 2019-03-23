<?php

	require("../Database/connection.php");

	//Pega os atributos de requisição enviados via POST
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$nome = $_POST['nome'];
	$raca = $_POST['raca'];
	$classe = $_POST['classe'];

	//pega a conexão
	$con = getConnection();

	$query = "INSERT INTO personagem (nome_de_guerra,palavra_magica,nome,raca,classe) 
	VALUES ('$login','$senha','$nome','$raca','$classe')";

	//Verifica o resultado da inserção
	if(pg_query($con,$query)){
		$_SESSION['msg'] = "Cadastrado com sucesso!";
		header('location:../index.php');  
	}else{
		$_SESSION['msg'] = "Falha no cadastro!";
		header('location:cadastro.php');  
	}

?>

