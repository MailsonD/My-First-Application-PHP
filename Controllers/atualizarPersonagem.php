<?php

session_start();

require("../Database/connection.php");

	//Pega os atributos de requisição enviados via POST
$login = $_POST['login'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$raca = $_POST['raca'];
$classe = $_POST['classe'];

$usuarioLogado = $_SESSION['login'];

	//pega a conexão
$con = getConnection();

$query = "UPDATE personagem SET nome_de_guerra = '$login', palavra_magica = '$senha', nome = '$nome', raca = '$raca', classe = '$classe' WHERE nome_de_guerra = '$usuarioLogado'";

if(pg_query($con,$query)){
	header('location:../home/home.php'); 
}else{
	$_SESSION['msg'] = 'Deu problema meu bom!';
	header('location:../home/atualizar.php'); 
}

?>