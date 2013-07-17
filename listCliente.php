<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Cliente.php';

$sm->assign('usuario', $_SESSION['usuario_0'][nome]);

$c = new Cliente();

if(isset($_GET['del'])){
    $c->setId($_GET['del']);
    $c->delete();
}


$sm->assign('lista', $c->select());


$sm->display("listCliente.tpl")
?>
