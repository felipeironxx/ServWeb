<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Empresa.php';

$sm->assign('usuario', $_SESSION['usuario_0'][nome]);

$ce = new Empresa();

if(isset($_GET['del'])){
    $ce->setId($_GET['del']);
    $ce->delete();
}

$sm->assign('lista', $ce->select());

$sm->display("listEmpresa.tpl")
?>
