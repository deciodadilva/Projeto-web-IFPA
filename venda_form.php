<div class="formulario2">

    <h1 style="text-align: center">CADASTRAR VENDA</h1>

   <form id="formVenda"  method="post" >
        <table>
            <tr>
                <td>Computador: </td><td>
                    <select name="campo_venda" id="cmpNm">
                        <option value="#">Selecione...</option>
                    </select> <br>
                </td>
            </tr>

            <tr>
                <td>Impressora: </td><td>
                       <select name="campo_IMP" id="cmpfb">
                        <option value="@">Selecione...</option>
                    </select> <br>
                </td>
            </tr>

            <tr>
                <td>Cliente: </td><td>
                    <select name="campo_CLI" id="cmpnome">
                        <option value="*">Selecione...</option>
                    </select> <br>
                </td>
            </tr>

            <tr>
                <td>Funcionario: </td><td>
                    <select name="campo_func" id="cmpNome">
                        <option value="&">Selecione...</option>
                    </select> <br>
                </td>
            </tr>

            <tr>
                <td>Data da venda: </td><td><input type="text" name="campo_data" id="cmpDv"></td>
            </tr>
            <tr>
                <td>Preço: </td><td><input type="text" name="campo_preco" id="cmpPrc"></td>
            </tr>
        </table>

        <div class="posicao">
            <input type="submit" value="SALVAR">
        </div>

        </form>
</div>