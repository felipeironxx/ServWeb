<?php

require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Servico.php';

$sm->assign('usuario', $_SESSION['usuario_0'][nome]);

$cs = new Servico();

if (!isset($_GET['selColunas']) and !isset($_GET['pesquisa']) and !isset($_POST['filtrarConcuidos'])) {
    $sm->assign('lista', $cs->selectInner());
}

//Aqui faz os pesquisar por coluna!!
if (isset($_GET['selColunas']) and isset($_GET['pesquisa'])) {
    $coluna = $_GET['selColunas'];
    $pesq = $_GET['pesquisa'];

    if ($coluna == 'nome_empresa') {
        $sm->assign('lista', $cs->selectInner("and {$coluna} LIKE '%{$pesq}%'", "and id_empresa LIKE '%{$pesq}%'"));
    } else if ($coluna == 'nome_cliente') {
        $sm->assign('lista', $cs->selectInner("and id_cliente LIKE '%{$pesq}%'", "and {$coluna} LIKE '%{$pesq}%'"));
    } else {
        if ($coluna == 'dt_solicitacao') {//se caso for por data de solicitação, ele passa a data para o formato US para fazer o select
            $pesq = $cs->dateToUS($pesq);
        }
        $sm->assign('lista', $cs->selectInner("and {$coluna} LIKE '%{$pesq}%'", "and {$coluna} LIKE '%{$pesq}%'"));
    }
}
//Aqui faz a filtragem de serviços concluidos e não conluidos e se 
//caso a opção exibe todos for selecionada ele exibe todos os serviços
if (isset($_POST['filtrarConcluidos'])) {
    $var = $_POST['filtrarConcluidos'];
    if ($var == 'T') {
        header('Location: listServico.php');
        exit;
    } else {
        $sm->assign('lista', $cs->selectInner("and concluido = '{$var}'", "and concluido = '{$var}'"));
    }
}

$sm->display("listServico.tpl")
?>

