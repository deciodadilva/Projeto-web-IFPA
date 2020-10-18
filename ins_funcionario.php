<?php
    if(isset($_POST['campo_nome'])){
        $nome = $_POST['campo_nome'];
        $cpf = $_POST['campo_cpf'];
        $carg = $_POST['campo_cargo'];

        $sql = "INSERT INTO funcionario(nome, cpf, cargo) VALUES ('$nome','$cpf','$carg')";
        include "conexao.php";
        if (mysqli_query($con, $sql)) {
            mysqli_close($con);
            echo "ok";
        }else{
            echo "Erro: " . $sql . "<br>" . mysqli_error($con);
        }
    }else{
        echo "erro";
    }
?>