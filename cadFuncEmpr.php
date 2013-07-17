<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Empresa.php';
require_once 'core/FuncEmpr.php';

$ce = new Empresa();
$cfe = new FuncEmpr();

$sm->assign('list', $ce->select());


// faz o cadastro
if(isset($_POST['nFuncEmpr']) and isset($_POST['selEmprFunc']) and !isset($_GET['edit'])){
        
        $cfe->setNome($_POST['nFuncEmpr']);
        $cfe->setId_empresa($_POST['selEmprFunc']);
        $cfe->insert();
        
        $sm->assign("done", true);
}




$sm->display("cadFuncEmpr.tpl")
?>
