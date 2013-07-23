<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/FuncEmpr.php';
require_once 'core/Empresa.php';

$sm->assign('usuario', $_SESSION['usuario_0'][nome]);

$cfe = new FuncEmpr;
$ce = new Empresa();

$sm->assign('list', $ce->select());
$sm->assign('lista', $cfe->selectInner());

if (isset($_GET['filtrar'])) {
    $id = $_GET['filtrar'];
    
    $sm->assign('lista', $cfe->selectInner("and id_empresa = {$id}"));
}

if(isset($_GET['del'])){
    $cfe->setId($_GET['del']);
    $cfe->delete();
}

$sm->display("listFuncEmpr.tpl")
?>
