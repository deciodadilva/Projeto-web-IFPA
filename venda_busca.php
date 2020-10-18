<?php
    $sql = "SELECT * FROM vendas1";
    include "conexao.php";
    $resposta = "";
    if($resultado = mysqli_query($con,$sql)){
        while($lh = mysqli_fetch_assoc($resultado)){
            $resposta .= "<tr>";
            $resposta .= "<td>".$lh['id_venda']."</td>";
            $resposta .= "<td>".$lh['item']."</td>";
            $resposta .= "<td>".$lh['imp']."</td>";
            $resposta .= "<td>".$lh['cliente']."</td>";
            $resposta .= "<td>".$lh['funcionario']."</td>";
            $resposta .= "<td>".$lh['data']."</td>";
            $resposta .= "<td>".$lh['preco_total']."</td>";
            $resposta .= "</tr>";
        }
        echo $resposta;
    }
?>