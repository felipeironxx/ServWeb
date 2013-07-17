<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Empresa.php';

$ce = new Empresa();

// faz o cadastro
if(isset($_POST['nEmpresa']) and isset($_POST['cnpj']) and isset($_POST['ie']) and isset($_POST['nAplicativo']) and
   isset($_POST['serial_ap']) and isset($_POST['ruaE']) and isset($_POST['bairroE']) and isset($_POST['numE']) and
   isset($_POST['cidadeE']) and isset($_POST['telE']) and isset($_POST['contador']) and isset($_POST['tel_contador']) and
   isset($_POST['emailE']) and !isset($_GET['edit'])){
        
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
        $ce->insert();
        
        $sm->assign("done", true);
}

$sm->display("cadEmpresa.tpl")
?>
