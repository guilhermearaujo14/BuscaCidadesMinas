<?php

    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "cidadesminas";

    $mysqli = new mysqli($host, $usuario, $senha, $bd);
    mysqli_set_charset($mysqli, 'utf8');
    if($mysqli -> connect_error){
        echo "Falha na conexão: (". $mysqli->connect_error.") ".$mysqli->connect_error;
    }
?>