<?php
    $sql = "SELECT * FROM clientes";
    include "conexao.php";
    $resposta = "<option value='#'>Selecione...</option>";
    if($resultado = mysqli_query($con,$sql)){
        while($lh = mysqli_fetch_assoc($resultado)){
            $resposta .= "<option value='".$lh['idcliente']."'>".$lh['nome']." ".$lh['cpf']." </option>";
        }
        echo $resposta;
    }
?>