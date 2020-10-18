<?php
    $sql = "SELECT * FROM funcionario";
    include "conexao.php";
    $resposta = "<option value='#'>Selecione...</option>";
    if($resultado = mysqli_query($con,$sql)){
        while($lh = mysqli_fetch_assoc($resultado)){
            $resposta .= "<option value='".$lh['id_func']."'>".$lh['nome']." ".$lh['cargo']."</option>";
        }
        echo $resposta;
    }
?>