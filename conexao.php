<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "gginfo";
    $con = mysqli_connect($host, $usuario, $senha, $banco);
    if (mysqli_connect_errno($con)) {
   
        echo "Falha ao conectar ao Banco de dados: " . mysqli_connect_error();
     }
?>