<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Cliente.php';

$c = new Cliente();

// faz o cadastro
if(isset($_POST['nCliente']) and isset($_POST['cpf']) and isset($_POST['rg']) and isset($_POST['ruaC']) and isset($_POST['bairroC']) and 
   isset($_POST['numC']) and isset($_POST['cidadeC']) and isset($_POST['telC']) and !isset($_GET['edit'])){
        
        $c->setNome($_POST['nCliente']);
        $c->setCpf($_POST['cpf']);
        $c->setRg($_POST['rg']);
        $c->setRua($_POST['ruaC']);
        $c->setBairro($_POST['bairroC']);
        $c->setNumero($_POST['numC']);
        $c->setCidade($_POST['cidadeC']);
        $c->setTelefone($_POST['telC']);
        $c->insert();
        
        $sm->assign("done", true);
}

$sm->display("cadCliente.tpl")
?>
