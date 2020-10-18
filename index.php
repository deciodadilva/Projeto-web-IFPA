<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">     
	<link rel="stylesheet" type="text/css" href="atividade1.css">

			<script type="text/javascript">
		function abrir() {
			var menu = document.getElementById("menu");
			menu.style.width = "260px";
		}

		function fechar() {
			var menu = document.getElementById("menu");
			menu.style.width = "0px";	
		}
	</script>
     <title>GG INFO</title>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="scripts.js"></script>
</head>

<body>
<div class="topo">
	<img src="tela_login.png" width=20% height=10%>
	<p> </p>
</div>

<div id="menu" class="menu">
	<a href="#" class="fechar" onclick="fechar()">&times</a>
            <ul>
                <li><a href="index.php?p=cc">Cadastrar Computadores</a></li>
                 <a>___________</a>
                <li><a href="index.php?p=cf">Cadastrar Impressoras</a></li>
                 <a>___________</a>
                <li><a href="index.php?p=ca">Cadastrar Clientes</a></li>
                 <a>___________</a>
                <li><a href="index.php?p=cb">Cadastrar Funcionario</a></li>
                    <a>___________</a>
                <li><a href="index.php?p=vc">Ver Computadores</a></li>
                 <a>___________</a>
                <li><a href="index.php?p=vf">Ver Impressoras</a></li>
                 <a>___________</a>
                <li><a href="index.php?p=va">Ver Clientes</a></li>
                 <a>___________</a>
                li><a href="index.php?p=vb">Ver Funcionario</a></li>
                 <a>___________</a>
                <li><a href="index.php?p=vv">Ver Vendas</a></li>        
                    <a>___________</a>
                <li><a href="index.php?p=rv">Realizar venda</a></li>

            </ul>

</div>

<span onclick="abrir()">&#9776 Menu</span>


<div id="conteudo" class="centro">
            <?php
                if(isset($_GET['p'])){
                    $pagina = $_GET['p'];
                }else{
                    $pagina = 'cc';
                }
                if($pagina == 'cc'){
                    include "computadores_form.html";
                }elseif($pagina == 'vc'){
                    include "computadores_ver.php";
                }elseif($pagina == 'cf'){
                    include "impressora_form.html";
                }elseif($pagina == 'vf'){
                    include "impressora_ver.php";
                }elseif($pagina == 'ca'){
                    include "clientes_form.html";
                }elseif($pagina == 'va'){
                    include "clientes_ver.php";

                }elseif($pagina == 'cb'){
                    include "funcionario_form.html";
                }elseif($pagina == 'vb'){
                    include "funcionario_ver.php";

                }elseif($pagina == 'rv'){
                    include "venda_form.php";
                }elseif($pagina == 'vv'){
                    include "venda_ver.php";
                }
            ?>
        </div>
<br>
<div class="rodape">
	<h4>Aplicação web v1.0</h4>
</div>
</body>
</html>