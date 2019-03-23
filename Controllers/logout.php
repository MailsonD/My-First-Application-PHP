<?php

//resume a sessão para continuar de onde parou
session_start();

//para poder destruí-la 
if(session_destroy()){
	echo "deslogado com sucesso!";
	header('location:../index.php');
}else{
	echo "Não foi possível deslogar!";
}

?>