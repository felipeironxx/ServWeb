<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/FuncEmpr.php';

$sm->assign('usuario', $_SESSION['usuario_0'][nome]);

$cfe = new FuncEmpr;

$sm->assign('lista', $cfe->selectInner());

//if (isset($_GET['pesquisa'])) {
//    $nome = $_GET['pesquisa'];
//    $nome = mysql_real_escape_string($nome);
//    
//    $sm->assign('lista', $ce->select("and nome_empresa LIKE '%{$nome}%'"));
//}

if(isset($_GET['del'])){
    $cfe->setId($_GET['del']);
    $cfe->delete();
}

$sm->display("listFuncEmpr.tpl")
?>
