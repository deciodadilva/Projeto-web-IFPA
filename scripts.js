$(document).ready(function(){

    $('#conteudo').on('submit','#formComputadores',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_computadores.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formComputadores').each(function(){
                        this.reset();
                    });
                    alert("O computador foi inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    $('#conteudo').on('click','#btn_bscComputadores',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "computadores_busca.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblComputadores').html(response);
            }
        });
    });

    $('#conteudo').on('focus','#cmpNm',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "computadores_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpNm').html(response);
            }
        });
    });

});


/*----------------------------------------*/

$(document).ready(function(){

    $('#conteudo').on('submit','#formclientes',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_clientes.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formclientes').each(function(){
                        this.reset();
                    });
                    alert("O cliente foi inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    $('#conteudo').on('click','#btn_bsccliente',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "clientes_busca.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblcliente').html(response);
            }
        });
    });

    $('#conteudo').on('focus','#cmpnome',function(e){ 
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "clientes_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpnome').html(response);
            }
        });
    });

});

/*--------------------------------*/

$(document).ready(function(){

    $('#conteudo').on('submit','#formImpressora',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_impressora.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formImpressora').each(function(){
                        this.reset();
                    });
                    alert("A Impressora foi inserida com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    $('#conteudo').on('click','#btn_bscImpressora',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "impressora_busca.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblImpressora').html(response);
            }
        });
    });

    $('#conteudo').on('focus','#cmpfb',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "impressora_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpfb').html(response);
            }
        });
    });

});

/*--------------------------------------------------*/

$(document).ready(function(){

    $('#conteudo').on('submit','#formVenda',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_venda.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formVenda').each(function(){
                        this.reset();
                    });
                    alert("A venda foi inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });


    $('#conteudo').on('click','#btn_bscVendas',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "venda_busca.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblVendas').html(response);
            }
        });
    });
});

/*--------------------------------------------------*/

$(document).ready(function(){

    $('#conteudo').on('submit','#formfuncionario',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_funcionario.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formfuncionario').each(function(){
                        this.reset();
                    });
                    alert("O funcionario foi inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    $('#conteudo').on('click','#btn_bscfuncionario',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "funcionario_busca.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblfuncionario').html(response);
            }
        });
    });

    $('#conteudo').on('focus','#cmpNome',function(e){ 
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "funcionario_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpNome').html(response);
            }
        });
    });

});

/*--------------------------------*/