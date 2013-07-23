{include file="view/head.tpl"}

<h2>Serviços</h2>

<hr/>

<br><div id="ferramentasS">

    <form name="frmFerrramentaS" method="GET">

        <input type="button" value="Novo Serviço" onclick="win('cadServico.php',600,420);">

        Pesquisar por: <select name="selColunasServico">
            <option value="id">Código</option>
            <option value="nome_func_realizou">Funcionario que Anotou</option>
            <option value="">Solicitante</option>
            <option value="id">Data Solicitação</option>
        </select>
        <input type="text" name="pesquisa"><input type="submit" value="Pesquisar">

    </form>

</div><br>

<form name="frmTabelaS" method="POST">

    Exibir somente os:<select name="selConcluidos">
        <option value="S">Conluidos</option>
        <option value="N">Não Conluidos</option>
        <option value="T">Todos</option>
    </select><input type="submit" name="exibir" value="Exibir">

    <table border ="1">
        <tr>
            <td>Codigo do servico</td> 
            <td>Funcionario que anotou a solicitaçao</td> 
            <td>Solicitante</td>
            <td>Servico a ser realizado</td> 
            <td>Data da solictaçao</td>
            <td>Concluido</td>
            <td>Ações</td>        
        </tr>

        {foreach from=$lista item=row}
            <tr>
                <td>{$row.id} </td> 
                <td>{$row.nome_funcionario} </td>
                {if $row.nome_cliente == ''}
                    <td>{$row.nome_empresa} | {$row.nome_func_empr}</td>
                {else}
                    <td>{$row.nome_cliente} </td>
                {/if}
                <td>{$row.serv_solicitado} </td> 
                <td>{$row.dt_solicitacao} </td>
                <td align="center"><input type="checkbox" name="conc" {if $row.concluido == 'S'} checked="checked" {/if}
                    {if $row.id_func_realizou == ''} onclick="alertas('{$row.nome_funcionario}', '{$row.concluido}')" {else}
                        onclick="win('concluir_servico.php?concluir={$row.id}',500,200);" {/if} value=""/>
                </td>
                <td><a href="#" {if $row.concluido == 'N'} onclick="alertas('{$row.id_func_realizou}', '{$row.concluido}')" {else} 
                       onclick="win('editServico.php?edit={$row.id}',450,590)"{/if}>Detalhes</a>

                    <input type="button" value="Iniciar Serviço" {if $row.id_func_realizou != ''} onclick="alertas('{$row.id_func_realizou}', '{$row.concluido}')" {else} 
                           onclick="win('iniciar_servico.php?iniciar={$row.id}',400,135)" {/if}/> 
                </td>
            </tr>
            {/foreach}
            </table>
        </form>

        {include file="view/footer.tpl"}