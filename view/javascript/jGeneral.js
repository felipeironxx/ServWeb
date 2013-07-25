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

function formataCPF(campo){
    var cpf = campo.value;
    var tam = cpf.length;
    if(tam==3){
        campo.value = cpf + ".";
    }else if(tam == 7){
        campo.value = cpf + ".";
    }else if(tam === 11){
        campo.value = cpf + "-";
    }
}


function validarEnvio(form){
    var exp_nome = /^[a-zA-Z\xC0-\xFF ]+$/;
       
    var ok = true;
    
    if (exp_nome.test(form.value) == false){
        alert("Você precisar informa o Nome.");
        form.focus();
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

function valida(){
    if(valida_cpf(document.getElementById('cpf').value))
        return true;
    else
        alert('CPF Inválido');
    document.cad.cpf.focus();
}

function remove(str, sub) {
    i = str.indexOf(sub);
    r = "";
    if (i == -1) return str;
    r += str.substring(0,i) + remove(str.substring(i + sub.length), sub);
    return r;
}
			
function valida_cpf(cpf){
    var numeros, digitos, soma, i, resultado, digitos_iguais;
    digitos_iguais = 1;
    cpf = remove(cpf, ".");
    cpf = remove(cpf, "-");
    if (cpf.length < 11)
        return false;
    for (i = 0; i < cpf.length - 1; i++)
        if (cpf.charAt(i) != cpf.charAt(i + 1))
        {
            digitos_iguais = 0;
            break;
        }
    if (!digitos_iguais)
    {
        numeros = cpf.substring(0,9);
        digitos = cpf.substring(9);
        soma = 0;
        for (i = 10; i > 1; i--)
            soma += numeros.charAt(10 - i) * i;
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(0))
            return false;
        numeros = cpf.substring(0,10);
        soma = 0;
        for (i = 11; i > 1; i--)
            soma += numeros.charAt(11 - i) * i;
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(1))
            return false;
        return true;
    }
    else
        return false;
}