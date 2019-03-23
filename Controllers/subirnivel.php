<?php
require("../Database/connection.php");

session_start();

$personagemLogado = $_SESSION['login'];

$con = getConnection();

$query = "UPDATE nivelPersonagem SET nivel=nivel+1 WHERE nomePersonagem = '$personagemLogado'";

$result = pg_query($con,$query);
closeConnection($con);

if(!$result){
	$_SESSION['msg'] = "Você ainda é fraco. Lhe falta ódio!";
}else{
	$_SESSION['msg'] = "Parabêns campeão. Mais um passo próximo dos salões de Odin";
}

header('location:../home/home.php');



?>