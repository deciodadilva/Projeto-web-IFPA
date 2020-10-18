<?php
    if(isset($_POST['campo_fab'])){
        $fab = $_POST['campo_fab'];
        $imp = $_POST['campo_imp'];
        $tipo = $_POST['campo_Tipo'];
        $quanti= $_POST['campo_Quant'];
        $preco = $_POST['campo_preco'];
    $sql = "INSERT INTO impressoras(fabricante, impressao, tipo, quantidade, preco) VALUES ('$fab','$imp','$tipo','$quanti','$preco')";
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