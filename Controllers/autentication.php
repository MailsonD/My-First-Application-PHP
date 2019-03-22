<?php

include("../Database/connection.php");

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$con = getConnection();

$query = "SELECT * FROM personagem WHERE nome_de_guerra ='$login' AND palavra_magica ='$senha'";

$result = pg_query($con,$query);

closeConnection($con);

if(pg_num_rows($result)>0){
   $_SESSION['login'] = $login;
   header('location:../home/home.php');    
}else{
    $_SESSION['msg'] = "Erro de autenticação";
    header('location:../index.php'); 
}

   
?>
