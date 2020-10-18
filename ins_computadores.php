<?php
    if(isset($_POST['campo_nome'])){
        $nome = $_POST['campo_nome'];
        $fabr = $_POST['campo_fabi'];
        $proce = $_POST['campo_proc'];
        $ram = $_POST['campo_ram'];
        $hd = $_POST['campo_hd'];
        $te = $_POST['campo_tela'];
        $preco = $_POST['campo_preco'];
        $quant = $_POST['campo_quant'];
        $ti = $_POST['campo_tipo'];
        $sql = "INSERT INTO computadores(nome, fabricante, processador, memoria_ram, hd, tela, preco, quantidade, tipo) VALUES ('$nome','$fabr','$proce','$ram','$hd', '$te', '$preco', '$quant', '$ti')";
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