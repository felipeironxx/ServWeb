<?php

require_once 'sm.php';
require_once 'core/Usuario.php';

// Instancia a classe
$u = new Usuario();

if (isset($_POST['login']) and isset($_POST['senha'])) {

// Pega os dados vindos do formulário
    $usuario = $_POST['login'];
    $senha = $_POST['senha'];

// Se o campo "lembrar" não existir, o script funcionará normalmente
    $lembrar = (isset($_POST['lembrar']) AND !empty($_POST['lembrar']));



// Tenta logar o usuário com os dados
    if ($u->logaUsuario($usuario, $senha, $lembrar)) {

        // Usuário logado com sucesso, redireciona ele para o index
        header("Location: index.php");
        exit;
    } else {
//Não foi possível logar o usuário, exibe a mensagem de erro
    $sm->assign('erro', $u->erro);
    }
}

$sm->display("login.tpl")
?>
