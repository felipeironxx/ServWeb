<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';

$sm->assign('usuario', $_SESSION['usuario_0'][nome]);

$sm->display("index.tpl")
?>
