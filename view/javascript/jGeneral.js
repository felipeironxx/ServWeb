function deletar(){
    confirm("Deseja realmente deletar?");
    window.location.href='listServico.php';
}

function formataTel(campo){
    var tel = campo.value;
    var tam = tel.length;
    if(tam < 1){
        campo.value = tel + "(";
    }
    else if(tam==3){
        campo.value = tel + ")";
    }else if(tam == 8){
        campo.value = tel + "-";
    }
}


function validarEnvio(form){
    var exp_nome = /^[a-zA-Z\xC0-\xFF ]+$/;
       
    var ok = true;
    
    if (exp_nome.test(form.value) == false){
        alert("Você precisar informa o Nome.");
        ok = false;
    }
    return ok;
}


function deal(obj){
    if(obj == "pf"){
        document.getElementById('fis').style.display ='block';
        document.getElementById('jur').style.display ='none';
    }else if(obj == "pj"){
        document.getElementById('jur').style.display ='block';
        document.getElementById('fis').style.display ='none';
    }
}


function habilitar_edit_serv(valor){
    
    if(valor == 0){
        
        document.editServico.selCodFuncAnot.disabled = false;
        document.editServico.selCodEmpr.disabled = false;
        document.editServico.selCodFuncEmpr.disabled = false;
        document.editServico.servASerFeito.disabled = false;
        document.editServico.dataSolicitacao.disabled = false;
        document.editServico.selCodFuncReal.disabled = false;
        document.editServico.serv_realizado.disabled = false;
        document.editServico.dt_hr_comeco.disabled = false;
        document.editServico.dt_hr_realizacao.disabled = false;
       
    }else if(valor == 1){
        
        document.editServico.selCodFuncAnot.disabled = false;
        document.editServico.selCodCliente.disabled = false;
        document.editServico.servASerFeito.disabled = false;
        document.editServico.dataSolicitacao.disabled = false;
        document.editServico.selCodFuncReal.disabled = false;
        document.editServico.serv_realizado.disabled = false;
        document.editServico.dt_hr_comeco.disabled = false;
        document.editServico.dt_hr_realizacao.disabled = false;
    }
}