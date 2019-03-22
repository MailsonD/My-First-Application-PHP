<?php

session_start();

if(session_destroy()){
	echo "deslogado com sucesso!";
	header('location:../index.php');
}else{
	echo "Não foi possível deslogar!";
}

?>