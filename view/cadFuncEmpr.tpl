{include file="view/head_win.tpl"}

<div id="formCadFuncEmpr">
    <h3>Cadastro de Funcionario das Empresas</h3>

    <form name="cad" id="cad" method="post" onsubmit="return validarEnvio(document.cad.nFuncEmpr);">

        Nome do Funcionario: <input type="text" name="nFuncEmpr" id="nFuncEmpr" size="40"><br>

        Empresa que o funcionario trabalha: <select name="selEmprFunc">
            {foreach from=$list item=r}
            <option value="{$r.id}">{$r.nome_empresa}</option>
            {/foreach}
        </select><br>

        <input type="submit" value="Cadastrar"/>
    </form>
</div>


{include file="view/footer_win.tpl"}
