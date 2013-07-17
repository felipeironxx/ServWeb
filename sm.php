<?php
/*
 Este arquivo configura a inicialização do smarty
 */

require_once 'inc/smarty/libs/Smarty.class.php';
$sm = new Smarty;
$sm->template_dir = "view/";
$sm->compile_dir = "inc/smarty/templates_c";
?>
