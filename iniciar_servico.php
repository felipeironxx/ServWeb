<?php

require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Servico.php';
require_once 'core/Funcionario.php';

$cs = new Servico();
$cf = new Funcionario();

$sm->assign('funclist', $cf->select());

$cs->setId($_GET['iniciar']);
$cs->load();

$v = $cs->getId_cliente();
if ($v == "") {
    $v = 0;
} else {
    $v = 1;
}

if ($v == 0) {

    if (isset($_POST['selCodFuncReal'], $_POST['dt_hr_comeco'])) {
        if ($_POST['selCodFuncReal'] != '' and $_POST['dt_hr_comeco'] != '') {

            $cs->setId_cliente('NULL');
            $cs->setId_func_realizou($_POST['selCodFuncReal']);
            $cs->setDtHr_comeco($_POST['dt_hr_comeco']);
            $cs->update();

            $sm->assign("done", true);
        }//fim do preenchido ok
    }//fim do esta setado os campos
} else {
    if (isset($_POST['selCodFuncReal'], $_POST['dt_hr_comeco'])) {
        if ($_POST['selCodFuncReal'] != '' and $_POST['dt_hr_comeco'] != '') {


            $cs->setId_empresa('NULL');
            $cs->setId_func_empr('NULL');
            $cs->setId_func_realizou($_POST['selCodFuncReal']);
            $cs->setDtHr_comeco($_POST['dt_hr_comeco']);
            $cs->update();

            $sm->assign("done", true);
        }//fim do preenchido ok
    }//fim do esta setado os campos
}

$sm->display("iniciar_servico.tpl");
?>
