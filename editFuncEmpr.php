<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/FuncEmpr.php';
require_once 'core/Empresa.php';

$cfe = new FuncEmpr();
$ce = new Empresa();

$cfe->setId($_GET['edit']);
$cfe->load();

$sm->assign('list', $ce->select());

if (isset($_POST['nFuncEmpr'], $_POST['selEmprFunc'])) {
    if ($_POST['nFuncEmpr']!='' and ($_POST['selEmprFunc']!='')) {

        $cfe->setNome($_POST['nFuncEmpr']);
        $cfe->setId_empresa($_POST['selEmprFunc']);
        $cfe->update();
        
        $sm->assign('done', true);
    }//fim do preenchido ok
}//fim do esta setado os campos

$dados = array('nFuncEmpr' => $cfe->getNome(), 
               'selEmprFunc' => $cfe->getId_empresa());

// a view recebe na variavel "e" os dados que estão em edição
$sm->assign('e', $dados);

$sm->display("editFuncEmpr.tpl")
?>
