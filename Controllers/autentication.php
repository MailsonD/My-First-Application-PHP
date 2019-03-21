<?php

	include("../Database/connection.php");

	$login = $_POST['login'];
    $senha = $_POST['senha'];

    $con = getConnection();

    $query = "SELECT * FROM usuario WHERE nome ='$login' AND senha='$senha'";

    $result = pg_query($con,$query);

    if(pg_num_rows($result)>0){
    	echo "logado";
    }else{
    	echo "erro";
    }

    closeConnection($con);

?>
