<?php

require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/FuncEmpr.php';

$cfe = new FuncEmpr();

$id = $_GET['id'];

if (isset($cfe)) {
    foreach ($cfe->select("and id_empresa = '{$id}'") as $menu) {

        echo "<option value=" . $menu['id'] . ">" . $menu['nome_func_empr'] . "</option>";
    }
}

//$sm->assign('funcemprlist', $cfe->select("and id_empresa = '{$id}'"));
?>
