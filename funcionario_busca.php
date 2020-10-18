<?php
    $sql = "SELECT * FROM funcionario";
    include "conexao.php";
    $resposta = "";
    if($resultado = mysqli_query($con,$sql)){
        while($lh = mysqli_fetch_assoc($resultado)){
            $resposta .= "<tr>";
            $resposta .= "<td>".$lh['id_func']."</td>";
            $resposta .= "<td>".$lh['nome']."</td>";
            $resposta .= "<td>".$lh['cpf']."</td>";
            $resposta .= "<td>".$lh['cargo']."</td>";
            $resposta .= "</tr>";
        }
        echo $resposta;
    }
?>