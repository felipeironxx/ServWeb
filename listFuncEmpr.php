<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/FuncEmpr.php';

$sm->assign('usuario', $_SESSION['usuario_0'][nome]);

$cfe = new FuncEmpr;

if(isset($_GET['del'])){
    $cfe->setId($_GET['del']);
    $cfe->delete();
}

$sm->assign('lista', $cfe->selectInner());

$sm->display("listFuncEmpr.tpl")
?>
