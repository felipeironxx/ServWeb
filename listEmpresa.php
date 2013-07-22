<?php

require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Empresa.php';

$sm->assign('usuario', $_SESSION['usuario_0'][nome]);

$ce = new Empresa();

$sm->assign('lista', $ce->select());

if (isset($_GET['pesquisa'])) {
    $nome = $_GET['pesquisa'];
    $nome = mysql_real_escape_string($nome);
    
    $sm->assign('lista', $ce->select("and nome_empresa LIKE '%{$nome}%'"));
}

if (isset($_GET['del'])) {
    $ce->setId($_GET['del']);
    $ce->delete();
}

$sm->display("listEmpresa.tpl")
?>
