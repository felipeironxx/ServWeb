{include file="view/head_win.tpl"}

<h3>Edição do Serviço</h3>

<form name="edit" id="edit" method="post">

    Funcionario que anotou o serviço: <select name="selCodFuncAnot" disabled="disable">
        {foreach from=$funclist item=r}
            <option value="{$r.id}" {if $r.id == $e.selCodFuncAnot} selected="selected" {/if}>{$r.nome_funcionario}</option>
        {/foreach}
    </select><br>

    {if $e.selCodCliente == ''}
        Empresa que solicitou o serviço: <select name="selCodEmpr" disabled="disable">
            {foreach from=$emplist item=r}
                <option value="{$r.id}" {if $r.id == $e.selCodEmpr} selected="selected" {/if}>{$r.nome_empresa}</option>
            {/foreach}
        </select><br>

        Funcionario solicitante: <select name="selCodFuncEmpr" disabled="disable">
            {foreach from=$funcemprlist item=r}
                <option value="{$r.id}" {if $r.id == $e.selCodFuncEmpr} selected="selected" {/if}>{$r.nome_func_empr}</option>
            {/foreach}
        </select><br>

    {else}
        Cliente solicitante: <select name="selCodCliente" disabled="disable">
            {foreach from=$clientelist item=r}
                <option value="{$r.id}" {if $r.id == $e.selCodCliente} selected="selected" {/if}>{$r.nome_cliente}</option>
            {/foreach}
        </select><br>
    {/if}

    Serviço a ser feito: <br><textarea name="servASerFeito" id="servASerFeito" rows="5" cols="32" disabled="disable">{$e.servASerFeito}</textarea><br>

    Data da solicitação do serviço: <input type="text" name="dataSolicitacao" id="dataSolicitacao" value="{$e.dataSolicitacao}" disabled="disable"><br>

    Funcionario que realizou o serviço: <select name="selCodFuncReal" disabled="disable">
        {foreach from=$funclist item=r}
            <option value="{$r.id}" {if $r.id == $e.selCodFuncReal} selected="selected" {/if}>{$r.nome_funcionario}</option>
        {/foreach}
    </select><br>

    Data e hora do inicio do serviço: <input type="text" name="dt_hr_comeco" id="dt_hr_comeco" value="{$e.dt_hr_comeco}" disabled="disable"><br>

    Serviço Realizado: <br><textarea name="serv_realizado" id="serv_realizado" rows="5" cols="32" disabled="disable">{$e.serv_realizado}</textarea><br>

    Data e hora do termino do serviço: <input type="text" name="dt_hr_realizacao" id="dt_hr_realizacao" value="{$e.dt_hr_realizacao}" disabled="disable"><br><br>

    <div id="btn">

        <input type="button" onclick="habilitar_edit_serv({$valor});" value="Editar"/>
        <input type="submit" value="Salvar" onclick="habilitar_edit_serv({$valor});"/>
        <input type="button" onclick="deletar({$e.id});" value="Deletar"/>
    
    </div>
</form>

{include file="view/footer_win.tpl"}
