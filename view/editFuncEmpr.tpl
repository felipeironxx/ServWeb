{include file="view/head_win.tpl"}

<h3>Edição do Funcionarios das Empresas</h3>

<form name="edit" id="edit" method="post" enctype="multipart/form-data">

    Nome do Funcionario: <input type="text" name="nFuncEmpr" id="nFuncEmpr" value="{$e.nFuncEmpr}" size="40"><br>

    Empresa que o funcionario trabalha: <select name="selEmprFunc">
        {foreach from=$list item=r}
            <option value="{$r.id}" {if $r.id == $e.selEmprFunc} selected="selected" {/if}>{$r.nome_empresa}</option>
        {/foreach}
    </select><br><br>

    <div id="btn">
        <input type="submit" value="Salvar"/>
    </div>
</form>


{include file="view/footer_win.tpl"}
