{include file="view/head.tpl"}

<h2>Empresas</h2>

<hr/>

<br><div id="ferramentasE">

    <form name="frmFerramentaE" method="GET">
        <input type="button" value="Nova Empresa" onclick="win('cadEmpresa.php',640,360)">
        <input type="text" name="pesquisa"><input type="submit" value="Pesquisar">
        <input type="button" value="Exibir Funcionarios das empresas" onclick="window.location.href='listFuncEmpr.php'"> 
    </form>

</div><br>

<form name="frmTabelaE">
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
