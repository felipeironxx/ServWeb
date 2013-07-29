<?php

require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/FuncEmpr.php';

$cfe = new FuncEmpr();

$id = $_GET['id'];
$cfe->select("and id_empresa = '{$id}'");

if (isset($cfe)) {
    foreach ($cfe as $rid => $nome_func_empr) {

        echo "<option value=" . $rid . ">" . $nome_func_empr . "</option>";
    }
}

//$sm->assign('funcemprlist', $cfe->select("and id_empresa = '{$id}'"));
?>
