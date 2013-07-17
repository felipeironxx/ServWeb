<?php
require_once 'core/Usuario.php';

$u = new Usuario();

// Verifica se não há um usuário logado
if ($u->usuarioLogado() === false) {

    // Não há um usuário logado, redireciona pra tela de login
    header("Location: login.php");
    exit;
}
?>
