<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Funcionario.php';

$sm->assign('usuario', $_SESSION['usuario_0'][nome]);

$cf = new Funcionario();

if(isset($_GET['del'])){
    $cf->setId($_GET['del']);
    $cf->delete();
}

$sm->assign('lista', $cf->select());


$sm->display("listFuncionario.tpl")
?>
