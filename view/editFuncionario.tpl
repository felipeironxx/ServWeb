{include file="view/head_win.tpl"}

<h3>Ediçao dos Funcionarios</h3>

<form name="edit" id="edit" method="post" enctype="multipart/form-data">

    Nome do Funcionario: <input type="text" name="nFuncionario" id="nFuncionario" value="{$e.nFuncionario}" size="40"><br>
    Celular: <input type="text" name="celular_func" id="nCelular_func" value="{$e.celular_func}" size="40" onkeypress="formataTel(document.editFuncionario.nCelular_func);"><br>
    E-mail: <input type="text" name="emailF" id="emailF" size="40" value="{$e.emailF}"><br><br>

    <div id="btn">
        <input type="submit" value="Salvar"/>
    </div>
</form>


{include file="view/footer_win.tpl"}