<?php 
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Funcionario.php';

$cf = new Funcionario();

$cf->setId($_GET['edit']);
$cf->load();

if (isset($_POST['nFuncionario'], $_POST['celular_func'], $_POST['emailF'])) {
    if ($_POST['nFuncionario']!='') {

        $cf->setNome($_POST['nFuncionario']);
        $cf->setCelular($_POST['nCelular_func']);
        $cf->setEmail($_POST['emailF']);
        $cf->update();
        
        $sm->assign("done", true);
    }//fim do preenchido ok
}//fim do esta setado os campos


$dados = array('nFuncionario' => $cf->getNome(),
               'celular_func' =>  $cf->getCelular(),
               'emailF' => $cf->getEmail());

$sm->assign('e', $dados);


$sm->display("editFuncionario.tpl");

?>
