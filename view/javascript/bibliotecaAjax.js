//var ajax;
//var dadosUsuario;
//
//function iniciaRequisicao(tipo, url, bool){
//    ajax.onreadystatechange = tratarResposta;
//    ajax.open(tipo, url, bool);
//    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=UTF-8");
//    ajax.send(dadosUsuario);
//}
//
//// cria String a ser enviada, formato campo1=valor&campo2=valor...
//function criarQueryString(){
//    dadosUsuario = "";
//    var frm = document.form[0];
//    var numElementos = frm.elements.length;
//    for(var i =0; i<numElementos; i++){
//        if (i <numElementos -1){
//            dadosUsuario += frm.elements[i].name + "=" +
//                encodeURIComponent(frm.element[i].value) + "&";
//        } else {
//            dadosUsuario += frm.elements[i].name + "=" +
//                encodeURIComponent(frm.element[i].value);
//        }
//    }
//}
//
//function tratarResposta() {
//    if ( ajax.readyState == 4) {
//        if ( ajax.status == 200 ) 
//           tratarDados(ajax.responseText);
//        else
//           alert("Problema na comunicação com o objeto XMLHttpRequest: " + ajax.statusText);
//    }
//}
//
//function enviarDados(url){
//    criarQueryString();
//    requisicao("POST", url, true);
//}
//
//function requisicaoHTTP(tipo , url, assinc){
//    if( window.XMLHttpRequest) { // Mozilla, Safari, ...
//        ajax = new XMLHttpRequest();
//    } else if ( window.ActiveXObject ) { // IE
//        ajax = new ActiveXObject("Msxm12.XMLHTTP");
//        if ( !ajax ) {
//            ajax = new ActiveXObject("Microsoft.XMLHTTP");
//        }
//    } 
//    if (ajax) //inciou com sucesso
//        iniciaRequisicao(tipo, url, assinc);    
//    else
//        alert("Seu navegador não possui suporte a essa aplicação");
//    
//}
//
//
//function obterFuncEmpr(id){
//    if(id){
//        var url="listServico.php?id="+id;
//        requisicaoHTTP("GET", url, true);
//    }
//    
//}
//
//function tratarDados(dados){
//    //var d = '{foreach from=$funcemprlist item=r}<option value="{$r.id}">{$r.nome_func_empr}</option>{/foreach}';
//    //document.getElementById("selCodFuncEmpr").innerHTML = d;    
//}

function buscarConteudo(divdestino, url, pars) 
{ 
    var myAjax = new Ajax.Updater(divdestino, url, {
        method: 'post', 
        parameters: pars, 
        evalScripts: true
    }); 
} 
function atualizarFuncEmpr() { 
    var v_empr = document.getElementById("selCodEmpr").value; 
    var v_funcempr = document.getElementById("selCodFuncEmpr").value; 
    if(v_empr == 0) { 
        /* Usa uma página vazia para limpar conteúdo de uma área */ 
        buscarConteudo('selCodFuncEmpr', 'vazio_camp.htm', ''); 
        limparResultados(); 
        return true; 
    } 
    limparResultados(); 
    buscarConteudo('funcempr', 'listServico.php?id=' +  v_empr,''); 
}


function limparResultados() { 
    buscarConteudo('selCodFuncEmpr', 'vazio.htm', ''); 
    return true; 
} 