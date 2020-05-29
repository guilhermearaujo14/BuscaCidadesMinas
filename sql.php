<?php
    include ("conexao.php");

    $distancia = $_GET["distancia"];
    

    if($distancia == "")
    {
        echo "<h1> O campo Distância deve ser preenchido... </h1>";
    }


    $consulta = "SELECT * FROM cidades
                 WHERE distanciaCapital <= '$distancia'";
         $con = mysqli_query($mysqli,$consulta) or die ("Erro");
 
?>