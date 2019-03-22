<?php

include("../Database/connection.php");

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$con = getConnection();

$query = "SELECT * FROM usuario WHERE login ='$login' AND senha='$senha'";

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
