window.onload = function(){
    var selCodEmpr = getElementById("selCodEmpr");
    selCodEmpr.onchange = function() {exibeFuncEmpr(selCodEmpr);}
}

function exibeFuncEmpr(selCodEmpr){
    if(selCodEmpr == NULL){
        return;
    }
    selecionado = selCodEmpr.options[selCodEmpr.selectedIndex].value;
    var url="busca_func_empr.php?id="+encodeURIComponet(selecionado);
    requisicaoHTTP("GET", url, true);
}
   

function tratarDados(dados){
    var resposta = document.getElementById("funcempr");
    resposta.innerHTML = dados;
   
}