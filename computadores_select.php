<?php
    $sql = "SELECT * FROM computadores";
    include "conexao.php";
    $resposta = "<option value='#'>Selecione...</option>";
    if($resultado = mysqli_query($con,$sql)){
        while($lh = mysqli_fetch_assoc($resultado)){
            $resposta .= "<option value='".$lh['id_desk']."'>".$lh['nome']." ".$lh['fabricante']." ".$lh['preco']." ".$lh['tipo']."</option>";
        }
        echo $resposta;
    }
?>