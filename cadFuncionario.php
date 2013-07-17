<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Funcionario.php';

$cf = new Funcionario();

// faz o cadastro
if(isset($_POST['nFuncionario']) and isset($_POST['celular_func']) and isset($_POST['emailF']) 
         and !isset($_GET['edit'])){
        
        $cf->setNome($_POST['nFuncionario']);
        $cf->setCelular($_POST['celular_func']);
        $cf->setEmail($_POST['emailF']);
        $cf->insert();
        
        $sm->assign("done", true);
}

$sm->display("cadFuncionario.tpl")
?>
