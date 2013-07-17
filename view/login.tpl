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
                <table width="400" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><p>{$erro}</p></td>
                    </tr>
                    <tr> 
                        <td>Login:</td>
                        <td> <input name="login" type="text" id="login"></td>
                    </tr>
                    <tr> 
                        <td>Senha:</td>
                        <td><input name="senha" type="password" id="senha"></td>
                    </tr>
                    <tr> 
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr> 
                        <td> <input name="entrar" type="submit" id="entrar" value="Entrar"> </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>