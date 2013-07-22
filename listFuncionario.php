<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Funcionario.php';

$sm->assign('usuario', $_SESSION['usuario_0'][nome]);

$cf = new Funcionario();

$sm->assign('lista', $cf->select());

if (isset($_GET['pesquisa'])) {
    $nome = $_GET['pesquisa'];
    $nome = mysql_real_escape_string($nome);
    
    $sm->assign('lista', $cf->select("and nome_funcionario LIKE '%{$nome}%'"));
}

if(isset($_GET['del'])){
    $cf->setId($_GET['del']);
    $cf->delete();
}

$sm->display("listFuncionario.tpl")
?>
