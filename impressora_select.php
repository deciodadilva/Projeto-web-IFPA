<?php
    $sql = "SELECT * FROM impressoras";
    include "conexao.php";
    $resposta = "<option value='#'>Selecione...</option>";
    if($resultado = mysqli_query($con,$sql)){
        while($lh = mysqli_fetch_assoc($resultado)){
            $resposta .= "<option value='".$lh['id_imp']."'>".$lh['fabricante']." ".$lh['tipo']." ".$lh['preco']."</option>";
        }
        echo $resposta;
    }
?>