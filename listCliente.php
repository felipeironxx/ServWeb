<?php

require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Cliente.php';

$sm->assign('usuario', $_SESSION['usuario_0'][nome]);

$c = new Cliente();

$sm->assign('lista', $c->select());

if (isset($_GET['pesquisa'])) {
    $nome = $_GET['pesquisa'];
    $nome = mysql_real_escape_string($nome);
    
    $sm->assign('lista', $c->select("and nome_cliente LIKE '%{$nome}%'"));
}

if (isset($_GET['del'])) {
    $c->setId($_GET['del']);
    $c->delete();
}


$sm->display("listCliente.tpl")
?>
