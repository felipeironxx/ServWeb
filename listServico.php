<?php

require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Servico.php';

$sm->assign('usuario', $_SESSION['usuario_0'][nome]);

$cs = new Servico();

$sm->assign('lista', $cs->selectInner());

if(isset($_GET['selColunas']) and isset($_GET['pesquisa'])){
    $coluna = $_GET['selColunas'];
    $pesq = $_GET['pesquisa'];
    
    $sm->assign('lista', $cs->selectInner("and '{$coluna}' LIKE '%{$pesq}%'", "and '{$coluna}' LIKE '%{$pesq}%'"));
}

if(isset($_POST['filtrarConcluidos'])) {
    $var = $_POST['filtrarConcluidos'];
    if ($var == 'T') {
        $sm->assign('lista', $cs->selectInner());
    }else{
        $sm->assign('lista', $cs->selectInner("and concluido = '{$var}'", "and concluido = '{$var}'"));
    }
}

$sm->display("listServico.tpl")
?>

