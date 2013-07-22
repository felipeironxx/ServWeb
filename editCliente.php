<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Cliente.php';

$c = new Cliente();

$c->setId($_GET['edit']);
$c->load();

if (isset($_POST['nCliente'], $_POST['cpf'], $_POST['rg'], $_POST['ruaC'], $_POST['bairroC'], 
    $_POST['numC'], $_POST['cidadeC'], $_POST['telC'])){
    if ($_POST['nCliente']!='') {

        $c->setNome($_POST['nCliente']);
        $c->setCpf($_POST['cpf']);
        $c->setRg($_POST['rg']);
        $c->setRua($_POST['ruaC']);
        $c->setBairro($_POST['bairroC']);
        $c->setNumero($_POST['numC']);
        $c->setCidade($_POST['cidadeC']);
        $c->setTelefone($_POST['telC']);
        $c->update();
        
        $sm->assign("done", true);
    }//fim do preenchido ok
}//fim do esta setado os campos



$dados = array('nCliente' => $c->getNome(),
               'cpf' => $c->getCpf(),
               'rg' => $c->getRg(),
               'ruaC' => $c->getRua(),
               'bairroC' => $c->getBairro(),
               'numC' => $c->getNumero(),
               'cidadeC' => $c->getCidade(),
               'telC' => $c->getTelefone());
               
$sm->assign('e', $dados);

$sm->display("editCliente.tpl");
?>