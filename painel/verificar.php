<?php 

// Verificar se o usuário está logado
@session_start();
if (@$_SESSION['id'] == "") {
    header('Location: ../');
    exit();
}

?>