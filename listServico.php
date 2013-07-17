<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Servico.php';

$sm->assign('usuario', $_SESSION['usuario_0'][nome]);

$cs = new Servico();

if(isset($_GET['del'])){
    $cs->setId($_GET['del']);
    $cs->delete();
}

$sm->assign('lista', $cs->selectInner());


$sm->display("listServico.tpl")
?>

