{include file="view/head_win.tpl"}

<div id="formalirio1">
    <h3>Cadastro do Serviço</h3>

    <form name="cad" id="cad" method="post" action="javascript:void%200" onload="document.getElementById('fis').style.display ='block';" onsubmit="return validarEnvioServico(this);">

        Pessoa Fisica<input type="radio" value="pf" name="p" checked="true" onclick="deal(this.value);">
        Pessoa Juridica<input type="radio" value="pj" name="p" onclick="deal(this.value);"><hr/>

        Funcionario que anotou o serviço: <select name="selCodFuncAnot" id="selCodFuncAnot">
            <option value="0">Escolha uma opção</option>
            {foreach from=$funclist item=r}
                <option value="{$r.id}">{$r.nome_funcionario}</option>
            {/foreach}
        </select><br>

        <div id="fis" style="display: block;">

            Cliente que solicitou o serviço: <select name="selCodCliente" id="selCodCliente">
                <option value="0">Escolha uma opção</option>
                {foreach from=$clielist item=r}
                    <option value="{$r.id}">{$r.nome_cliente}</option>
                {/foreach}
            </select><br>
        </div>

        <div id="jur" style="display: none;">   
            Empresa que solicitou o serviço: <select name="selCodEmpr" id="selCodEmpr">
                <option value="0">Escolha uma opção</option>
                {foreach from=$emplist item=r}
                    <option value="{$r.id}">{$r.nome_empresa}</option>
                {/foreach}
            </select><br>

            Funcionario solicitante: <select name="selCodFuncEmpr" id="selCodFuncEmpr">
                <option value="0">Escolha uma opção</option>  
                <span id="funcempr"></span>
            </select><br>

        </div>

        Serviço a ser feito: <br><textarea name="servASerFeito" id="servASerFeito" rows="5" cols="70" ></textarea><br>

        Data da solicitação do serviço: <input type="text" name="dataSolicitacao" id="dataSolicitacao" maxlength="10" onkeypress="formataData(document.cad.dataSolicitacao);"><br>

        <input type="submit" value="Cadastrar"/>
</div>


{include file="view/footer_win.tpl"}
