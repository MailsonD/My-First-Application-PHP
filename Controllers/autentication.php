<?php

include("../Database/connection.php");

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$con = getConnection();

$query = "SELECT * FROM usuario WHERE nome ='$login' AND senha='$senha'";

$result = pg_query($con,$query);

closeConnection($con);

if(pg_num_rows($result)>0){
   $_SESSION['login'] = $login;
   header('location:../home/home.php');    
}else{
    $_SESSION['erro'] = "Erro de autenticação";
    header('location:../index.php'); 
}

   

?>
