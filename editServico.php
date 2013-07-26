<?php

require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Servico.php';
require_once 'core/FuncEmpr.php';
require_once 'core/Empresa.php';
require_once 'core/Funcionario.php';
require_once 'core/Cliente.php';

$cs = new Servico();
$ce = new Empresa();
$cf = new Funcionario();
$cfe = new FuncEmpr();
$c = new Cliente();

if(isset($_GET['del'])){
    $cs->setId($_GET['del']);
    $cs->delete();
    
    $sm->assign("done", true);
}

$sm->assign('emplist', $ce->select());
$sm->assign('funclist', $cf->select());
$sm->assign('funcemprlist', $cfe->select());
$sm->assign('clientelist', $c->select());

$cs->setId($_GET['edit']);
$cs->load();

$v = $cs->getId_cliente();
if ($v == "") {
    $v = 0;
}else {
    $v = 1;
}

$sm->assign("valor", $v);

if ($v == 0) {

    if (isset($_POST['selCodFuncAnot'], $_POST['selCodEmpr'], $_POST['selCodFuncEmpr'], $_POST['servASerFeito'], 
              $_POST['selCodFuncReal'], $_POST['serv_realizado'], $_POST['dataSolicitacao'], $_POST['dt_hr_comeco'],
              $_POST['dt_hr_realizacao'])){
        if ($_POST['selCodFuncAnot']!= 0 and $_POST['selCodEmpr']!= 0 and $_POST['selCodFuncEmpr']!= 0
                and $_POST['servASerFeito']!= '' and $_POST['dataSolicitacao'] != '') {

            $cs->setId_func_anotou($_POST['selCodFuncAnot']);
            $cs->setId_empresa($_POST['selCodEmpr']);
            $cs->setId_func_empr($_POST['selCodFuncEmpr']);
            $cs->setId_cliente('NULL');
            $cs->setServ_solicitado($_POST['servASerFeito']);
            $cs->setId_func_realizou($_POST['selCodFuncReal']);
            $cs->setServ_realizado($_POST['serv_realizado']);
            $cs->setDt_solicitacao($_POST['dataSolicitacao']);
            $cs->setDtHr_comeco($_POST['dt_hr_comeco']);
            $cs->setDtHr_realizacao($_POST['dt_hr_realizacao']);
            $cs->update();

            $sm->assign("done", true);
        }//fim do preenchido ok
    }//fim do esta setado os campos
} else if ($v == 1) {
    if (isset($_POST['selCodFuncAnot'], $_POST['selCodCliente'], $_POST['servASerFeito'], $_POST['selCodFuncReal'], 
              $_POST['serv_realizado'], $_POST['dataSolicitacao'], $_POST['dt_hr_comeco'], $_POST['dt_hr_realizacao'])) {
        if ($_POST['selCodFuncAnot']!= 0 and $_POST['selCodCliente']!= 0 and $_POST['servASerFeito']!= '' 
            and $_POST['dataSolicitacao'] != '') {

        $cs->setId_func_anotou($_POST['selCodFuncAnot']);
        $cs->setId_empresa('NULL');
        $cs->setId_func_empr('NULL');
        $cs->setId_cliente($_POST['selCodCliente']);
        $cs->setServ_solicitado($_POST['servASerFeito']);
        $cs->setId_func_realizou($_POST['selCodFuncReal']);
        $cs->setServ_realizado($_POST['serv_realizado']);
        $cs->setDt_solicitacao($_POST['dataSolicitacao']);
        $cs->setDtHr_comeco($_POST['dt_hr_comeco']);
        $cs->setDtHr_realizacao($_POST['dt_hr_realizacao']);
        $cs->update();

        $sm->assign("done", true);
        }//fim do preenchido ok
    }//fim do esta setado os campos
}



$dados = array('id' => $cs->getId(),
    'selCodFuncAnot' => $cs->getId_func_anotou(),
    'selCodEmpr' => $cs->getId_empresa(),
    'selCodFuncEmpr' => $cs->getId_func_empr(),
    'selCodCliente' => $cs->getId_cliente(),
    'servASerFeito' => $cs->getServ_solicitado(),
    'dataSolicitacao' => $cs->getDt_solicitacao(),
    'selCodFuncReal' => $cs->getId_func_realizou(),
    'serv_realizado' => $cs->getServ_realizado(),
    'dt_hr_comeco' => $cs->getDtHr_comeco(),
    'dt_hr_realizacao' => $cs->getDtHr_realizacao());

$sm->assign('e', $dados);

$sm->display("editServico.tpl");
?>
