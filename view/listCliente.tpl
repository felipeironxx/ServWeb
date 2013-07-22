{include file="view/head.tpl"}

<h2>Clientes</h2>

<hr/>

<br><div id="ferramentasC">

    <form name="fmrFerramentaC" method="GET">
        <input type="button" value="Novo Cliente" onclick="win('cadCliente.php',640,360)">
        <input type="text" name="pesquisa"><input type="submit" value="Pesquisar">
    </form>
    
</div><br>

<form name="frmTabelaC">
    <table border ="1">
        <tr>
            <td>Codigo</td>  
            <td>Nome</td>
            <td>CPF</td> 
            <td>Carteira de Identidade</td>
            <td>Telefone</td> 
            <td>Ações</td>        
        </tr>
        {foreach from=$lista item=row}
            <tr>
                <td>{$row.id} </td> 
                <td>{$row.nome_cliente} </td>
                <td>{$row.cpf} </td>
                <td>{$row.rg} </td>
                <td>{$row.telefone} </td>
                <td><a href="#" onclick="win('editCliente.php?edit={$row.id}',640,270)">Edit</a> | 
                    <a href="?del={$row.id}">Del</a> </td>
            </tr>
        {/foreach}
    </table>
</form>

{include file="view/footer.tpl"}
