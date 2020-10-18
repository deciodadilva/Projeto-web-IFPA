<?php
    if(isset($_POST['campo_venda'])){
        $desk = $_POST['campo_venda'];
        $imp = $_POST['campo_IMP'];
        $cli = $_POST['campo_CLI'];
        $fun = $_POST['campo_func'];
        $data = $_POST['campo_data'];
        $preco = $_POST['campo_preco'];
      $sql = "INSERT INTO vendas1(item, imp, cliente, funcionario, data, preco_total) VALUES ('$desk','$imp','$cli','$fun','$data','$preco')";
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