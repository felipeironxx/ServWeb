{include file="view/head.tpl"}

<h2>Listagem dos Funcionarios das Empresas</h2>

<hr/><br>

<form name="formCadFuncEmpr">

    <input type="button" value="Novo Funcionario" onclick="win('cadFuncEmpr.php',290,420)">

</form>

<form name="formSelFuncEmpr">

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
