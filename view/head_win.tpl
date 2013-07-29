<!DOCTYPE html>
<html>
    <head>
        <title>Servisos Web</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="view/css/inicio.css" media="screen"/>
        <script type="text/javascript" src="view/javascript/jGeneral.js"></script>
        <script type="text/javascript" src="view/javascript/obterFuncEmpr.js"></script>
        
        <!-- Biblioteca Ajax -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="view/javascript/bibliotecaAjax.js"></script>
    </head>
    <body>

        {if isset($done)}
        <script type="text/javascript">
            parent.location.reload(true); 
        </script>
        {/if}