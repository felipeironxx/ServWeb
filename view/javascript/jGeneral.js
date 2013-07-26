function deletar(id){
    if(confirm("Deseja realmente deletar?")){
        window.location.href='?del=' + id;
    }else{
        return false;
    }
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

function formataData(campo){
    var dt = campo.value;
    var tam = dt.length;
    if(tam == 2){
        campo.value = dt + "/";
    }else if(tam == 5){
        campo.value = dt + "/";
    }
}

function formataDataHora(campo){
    var dthr = campo.value;
    var tam = dthr.length;
    if(tam == 2){
        campo.value = dthr + "/";
    }else if(tam == 5){
        campo.value = dthr + "/";
    }else if(tam == 10){
        campo.value = dthr + " ";
    }else if(tam == 13){
        campo.value = dthr + ":";
    }else if(tam == 16){
        campo.value = dthr + ":";
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

function formataCNPJ(campo){
    var cnpj = campo.value;
    var tam = cnpj.length;
    if(tam == 2){
        campo.value = cnpj + ".";
    }else if(tam == 6){
        campo.value = cnpj + ".";
    }else if(tam === 10){
        campo.value = cnpj + "/";
    }else if(tam === 15){
        campo.value = cnpj + "-";
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

function validarEnvioServico(form){
    
    if(form.p[0].checked == true){
    
        if (form.selCodFuncAnot.value == 0) {
            alert ("É preciso selecionar um funcionario válido.");
            return false;
        } else if (form.selCodCliente.value == 0) {
            alert ("É preciso selecionar um cliente válido.");
            return false;
        }else if (form.servASerFeito.value == false) {
            alert ("É preciso preencher o campo de serviço a ser realizado");
            return false;
        }
        else if (form.dataSolicitacao.value == false) {
            alert ("É preciso preencher o campo de data de solicitação");
            return false;
        }
    }else{
        if (form.selCodFuncAnot.value == 0) {
            alert ("É preciso selecionar um funcionario válido.");
            return false;
        }
        else if (form.selCodEmpr.value == 0) {
            alert ("É preciso selecionar uma empresa válida.");
            return false;
        }
        else if (form.selCodFuncEmpr.value == 0) {
            alert ("É preciso selecionar um funcionario de empresa válidao");
            return false;
        }else if (form.servASerFeito.value == false) {
            alert ("É preciso preencher o campo de serviço a ser realizado");
            return false;
        }
        else if (form.dataSolicitacao.value == false) {
            alert ("É preciso preencher o campo de data de solicitação");
            return false;
        }
    }

    return true;
}

function deal(obj){
    v = obj;
    if(obj == "pf"){
        document.getElementById('fis').style.display ='block';
        document.getElementById('jur').style.display ='none';
        document.getElementById('selCodFuncAnot').selectedIndex = 0;
        document.getElementById('selCodEmpr').selectedIndex = 0;
        document.getElementById('selCodFuncEmpr').selectedIndex = 0;
    }else if(obj == "pj"){
        document.getElementById('jur').style.display ='block';
        document.getElementById('fis').style.display ='none';
        document.getElementById('selCodFuncAnot').selectedIndex = 0;
        document.getElementById('selCodCliente').selectedIndex = 0;
    }
}


function habilitar_edit_serv(valor){
    
    if(valor == 0){
        
        document.edit.selCodFuncAnot.disabled = false;
        document.edit.selCodEmpr.disabled = false;
        document.edit.selCodFuncEmpr.disabled = false;
        document.edit.servASerFeito.disabled = false;
        document.edit.dataSolicitacao.disabled = false;
        document.edit.selCodFuncReal.disabled = false;
        document.edit.serv_realizado.disabled = false;
        document.edit.dt_hr_comeco.disabled = false;
        document.edit.dt_hr_realizacao.disabled = false;
       
    }else if(valor == 1){
        
        document.edit.selCodFuncAnot.disabled = false;
        document.edit.selCodCliente.disabled = false;
        document.edit.servASerFeito.disabled = false;
        document.edit.dataSolicitacao.disabled = false;
        document.edit.selCodFuncReal.disabled = false;
        document.edit.serv_realizado.disabled = false;
        document.edit.dt_hr_comeco.disabled = false;
        document.edit.dt_hr_realizacao.disabled = false;
    }
}

function validaCPF(){
    if(valida_cpf(document.getElementById('cpf').value)){
        return true;
    }
    else if(document.getElementById('cpf').value == ''){
        return true;        
    }
    else{
        alert('CPF Inválido');
        document.getElementById('cpf').focus();
    }
}

function validaCNPJ(){
    if(valida_cnpj(document.getElementById('cnpj').value)){
        return true;
    }
    else if(document.getElementById('cnpj').value == ''){
        return true;        
    }
    else{
        alert('CNPJ Inválido');
        document.getElementById('cnpj').focus();
    }
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

function valida_cnpj(cnpj){
    
    cnpj = cnpj.replace(/[^\d]+/g,'');
    
    var numeros, digitos, soma, i, resultado, pos, tamanho, digitos_iguais;
    digitos_iguais = 1;
    if (cnpj.length < 14 && cnpj.length < 15)
        return false;
    for (i = 0; i < cnpj.length - 1; i++)
        if (cnpj.charAt(i) != cnpj.charAt(i + 1))
        {
            digitos_iguais = 0;
            break;
        }
    if (!digitos_iguais)
    {
        tamanho = cnpj.length - 2
        numeros = cnpj.substring(0,tamanho);
        digitos = cnpj.substring(tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--)
        {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2)
                pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(0))
            return false;
        tamanho = tamanho + 1;
        numeros = cnpj.substring(0,tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--)
        {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2)
                pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(1))
            return false;
        return true;
    }
    else
        return false;
} 