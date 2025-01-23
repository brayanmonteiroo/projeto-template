<?php 
session_start();
echo $_SESSION['nome'] . '<br>';
echo $_SESSION['id'] . '<br>';
echo $_SESSION['nivel'] . '<br>';
?>

<a href="logout.php">Sair</a>