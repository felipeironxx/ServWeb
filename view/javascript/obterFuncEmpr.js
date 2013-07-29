window.onload = function(){
    var selCodEmpr = document.getElementById("selCodEmpr");
    selCodEmpr.onchange = function() {exibeFuncEmpr(selCodEmpr);}
}

function exibeFuncEmpr(selCodEmpr){
    if(selCodEmpr == null){
        return;
    }
    selecionado = selCodEmpr.options[selCodEmpr.selectedIndex].value;
    var url="busca_func_empr.php?id="+encodeURIComponent(selecionado);
    requisicaoHTTP("GET", url, true);
}
   

function tratarDados(dados){
    var resposta = document.getElementById("funcempr");
    alert(resposta);
    resposta.innerHTML = dados;
   
}