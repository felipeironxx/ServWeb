<!DOCTYPE html>
<html>
    <head>
        <title>Servisos Web</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="view/css/inicio.css" media="screen"/>
    </head>
    <body onload="document.login.login.focus()">
        <div id="corpo" align="center">
            <h1>Login</h1>
            <form name="login" method="post">
                <span class="text-error">{$erro}</span><br>
                Login:
                <input name="login" type="text" id="login"><br> 
                Senha:
                <input name="senha" type="password" id="senha"><br><br>
                <input name="entrar" type="submit" id="entrar" value="Entrar"> 
            </form>
        </div>
    </body>
</html>