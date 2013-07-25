{include file="view/head_win.tpl"}

<div id="formCadCliente">
    <h3>Cadastro de Cliente</h3>

    <form name="cad" id="cad" method="post" onsubmit="return validarEnvio(document.cad.nCliente);">

        Nome:                         <input type="text" name="nCliente" id="nCliente" size="40"><br>
        CPF:                          <input type="text" name="cpf" id="cpf" size="16" onblur="validaCPF();" onkeypress="formataCPF(document.cad.cpf);">
        RG:                           <input type="text" name="rg" id="rg" size="18"><br>
        Rua:                          <input type="text" name="ruaC" id="ruaC" size="40">
        Numero:                       <input type="text" name="numC" id="numC" size="10"><br>
        Bairro:                       <input type="text" name="bairroC" id="bairroC" size="40"><br>
        Cidade:                       <input type="text" name="cidadeC" id="cidadeC" size="40"><br>
        Telefone:                     <input type="text" name="telC" id="telC" size="13" onkeypress="formataTel(document.cad.telC);"><br>
        
        <input type="submit" value="Cadastrar"/>
    </form>
</div>

{include file="view/footer_win.tpl"}