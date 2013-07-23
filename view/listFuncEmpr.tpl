{include file="view/head.tpl"}

<h2>Funcionarios das Empresas</h2>

<hr/>

<br><div id="ferramentasFE">

    <form name="frmFerramentaFE" method="GET">
        <input type="button" value="Novo Funcionario" onclick="win('cadFuncEmpr.php',290,420)">
        Filtrar por empresa: <select name="filtrar">
            {foreach from=$list item=r}
                <option value="{$r.id}">{$r.nome_empresa}</option>
            {/foreach}
        </select>
        <input type="submit" value="Filtrar">
    </form>

</div><br>

<form name="frmTabelaFE">

    <table border ="1">
        <tr>
            <td>Codigo do Funcionario</td>  
            <td>Nome do Funcionario</td>
            <td>Nome do Empresa</td>
            <td>Ações</td>        
        </tr>
        {foreach from=$lista item=row}
            <tr>
                <td>{$row.id} </td>
                <td>{$row.nome_func_empr} </td>
                <td>{$row.nome_empresa} </td>
                <td><a href="#" onclick="win('editFuncEmpr.php?edit={$row.id}',380,200)">Edit</a> | 
                    <a href="?del={$row.id}">Del</a>
                </td>
            </tr>
        {/foreach}
    </table>
</form>

{include file="view/footer.tpl"}
