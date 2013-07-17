{include file="view/head.tpl"}

<h2>Listagem de Empresas</h2>

<hr/>

<br><form name="fmrCadEmpresa">

    <input type="button" value="Nova Empresa" onclick="win('cadEmpresa.php',640,360)">

</form>

<form name="formSelFuncionario" action="listFuncEmpr.php">

<input type="submit" value="Exibir Funcionarios das empresas">

</form>

<form name="formSelEmpresa">

<table border ="1">
    <tr>
        <td>Codigo da Empresa</td>  
        <td>Nome da Empresa</td>
        <td>CNPJ</td>                            
        <td>Nome do Aplicativo PAF-ECF</td>
        <td>Telefone</td>           
        <td>E-mail</td>             
        <td>Contador</td>           
        <td>Telefone do Contador</td>  
        <td>Ações</td>        
    </tr>
    {foreach from=$lista item=row}
    <tr>
        <td>{$row.id} </td> 
        <td>{$row.nome_empresa} </td>
        <td>{$row.cnpj} </td>
        <td>{$row.aplicativo} </td>
        <td>{$row.telefone} </td>
        <td>{$row.email} </td>
        <td>{$row.contador} </td>
        <td>{$row.telefone_contador } </td>
        <td><a href="#" onclick="win('editEmpresa.php?edit={$row.id}',640,360)">Edit</a> | 
            <a href="?del={$row.id}">Del</a> 
        </td>
    </tr>
    {/foreach}
</table>
</form>

{include file="view/footer.tpl"}
