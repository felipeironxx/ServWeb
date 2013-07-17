function win(enderecoURL,w,h){
    
    $.fancybox({
        'padding': 20,
        'autoScale':true,
        'overLayShow': false,
        'transitionIn': 'elastic',
        'transitionOut' : 'elastic',
        'width': w,
        'height': h,
        'href' : enderecoURL,
        'type': 'iframe'
    });
}

function alertas(obj1, obj2){

    if(obj1 == ""){
        obj1 = 1;
    }    
    
    if(obj2 == "N"){
        obj2 = 2;
    } 
 
    if(obj1 == 1 && obj2 == 2){
        alert("Serviço não iniciado");   
        window.location.reload();
    }else if(obj2 == 2 && obj1 != 1){
        alert("Serviço ainda em andamento.");
    }
    else if(obj1 != 1 && obj2 != 2){
        alert("Serviço já concluido");    
    }
}
