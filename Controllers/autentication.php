<?php

require("../Database/connection.php");

//resume sessão
session_start();

//Pega os parâmetros de requisição mandados via POST pelo usuário
$login = $_POST['login'];
$senha = $_POST['senha'];

//pega a conexão
$con = getConnection();

$query = "SELECT * FROM personagem WHERE nome_de_guerra ='$login' AND palavra_magica ='$senha'";

//realiza a consulta
$result = pg_query($con,$query);

closeConnection($con);

//Testa se houve ou não algum resultado
if(pg_num_rows($result)>0){
   $_SESSION['login'] = $login;
   header('location:../home/home.php');    
}else{
    $_SESSION['msg'] = "Erro de autenticação";
    header('location:../index.php'); 
}

   
?>
