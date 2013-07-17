<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Empresa.php';

$ce = new Empresa();

$ce->setId($_GET['edit']);
$ce->load();

if (isset($_POST['nEmpresa'], $_POST['cnpj'], $_POST['ie'], $_POST['nAplicativo'], $_POST['serial_ap'], $_POST['ruaE'],
   $_POST['bairroE'], $_POST['numE'], $_POST['cidadeE'], $_POST['telE'], $_POST['contador'], $_POST['tel_contador'], $_POST['emailE'])) {
    if ($_POST['nEmpresa']!='') {

        $ce->setNome($_POST['nEmpresa']);
        $ce->setCnpj($_POST['cnpj']);
        $ce->setIe($_POST['ie']);
        $ce->setAplicativo($_POST['nAplicativo']);
        $ce->setSerial_ap($_POST['serial_ap']);
        $ce->setRua($_POST['ruaE']);
        $ce->setBairro($_POST['bairroE']);
        $ce->setNumero($_POST['numE']);
        $ce->setCidade($_POST['cidadeE']);
        $ce->setTelefone($_POST['telE']);
        $ce->setContador($_POST['contador']);
        $ce->setTel_contador($_POST['tel_contador']);
        $ce->setEmail($_POST['emailE']);
        $ce->update();
        
        $sm->assign("done", true);
    }//fim do preenchido ok
}//fim do esta setado os campos



$dados = array('nEmpresa' => $ce->getNome(),
               'cnpj' => $ce->getCnpj(),
               'ie' => $ce->getIe(),
               'nAplicativo' => $ce->getAplicativo(),
               'serial_ap' => $ce->getSerial_ap(),
               'ruaE' => $ce->getRua(),
               'bairroE' => $ce->getBairro(),
               'numE' => $ce->getNumero(),
               'cidadeE' => $ce->getCidade(),
               'telE' => $ce->getTelefone(),
               'contador' => $ce->getContador(),
               'tel_contador' => $ce->getTel_contador(),
               'emailE' => $ce->getEmail());

$sm->assign('e', $dados);

$sm->display("editEmpresa.tpl");
?>


