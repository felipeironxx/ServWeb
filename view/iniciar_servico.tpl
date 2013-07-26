{include file="view/head_win.tpl"}

<div id="iniciarServ">
    
    <form name="formIniServ" id="formIniServ" method="post" onsubmit="return validarEnvio(this);">

        Funcionario q irá realizar o serviço: <select name="selCodFuncReal">
            {foreach from=$funclist item=r}
                <option value="{$r.id}">{$r.nome_funcionario}</option>
            {/foreach}
        </select><br>

        Data e Hora do inicio: <input type="text" name="dt_hr_comeco" id="dt_hr_comeco" size="19" maxlength="19" onkeypress="formataDataHora(document.formIniServ.dt_hr_comeco);"><br>


        <input type="submit" value="Iniciar"/>
    </form>
</div>


{include file="view/footer_win.tpl"}