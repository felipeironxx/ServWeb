{include file="view/head.tpl"}

<h2>Lista de Funcionarios Cadastrados</h2>

<hr/>

<form name="formCadFuncionario">

    <input type="button" value="Novo Funcionario" onclick="win('cadFuncionario.php',290,420);">

</form>

<form name="fmlistafunc">

    <table border ="1">
        <tr>
            <td>Codigo do Funcionario</td>  
            <td>Nome do Funcionario</td>
            <td>Celular</td>
            <td>E-mail</td>
            <td>Ações</td>        
        </tr>
        {foreach from=$lista item=row}
        <tr>
            <td>{$row.id}</td> 
            <td>{$row.nome_funcionario}</td>
            <td>{$row.celular}</td>
            <td>{$row.email}</td>
            <td><a href="#" onclick="win('editFuncionario.php?edit={$row.id}',390,250)">Edit</a> | 
                <a href="?del={$row.id}">Del</a>
            </td>
        </tr>
        {/foreach}
    </table>
</form>

{include file="view/footer.tpl"}
