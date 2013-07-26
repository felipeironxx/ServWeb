{include file="view/head_win.tpl"}

<div id="ConcluirServ">
    
    <form name="formConcServ" id="formConcServ" method="post" onsubmit="return validarEnvioConcluir(this);">

        Serviço reazlizado: <textarea name="serv_realizado" id="serv_realizado" rows="5" cols="70" ></textarea><br>
        Data e Hora da realização: <input type="text" name="dt_hr_realizacao" id="dt_hr_realizacao" size="19" maxlength="19" onkeypress="formataDataHora(document.formConcServ.dt_hr_realizacao);"><br>


        <input type="submit" value="Conluir"/>
    </form>
</div>


{include file="view/footer_win.tpl"}