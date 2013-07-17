<?php
require_once 'core/Usuario.php';

// Instancia a classe
$u = new Usuario();
 
// Usuário fez logout com sucesso?
if ( $u->logout() ) {

    // Redireciona pra tela de login
    header("Location: login.php");
    exit;
}

?>
