<?php 
session_start();
require_once 'conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senha_crip = md5($senha); 

//verificar se o usuário e senha estão corretos
$query = $pdo->prepare("SELECT * FROM usuarios
 WHERE email = :email
 AND senha_crip = :senha
 ");
$query->bindValue(':email', $usuario);
$query->bindValue(':senha', $senha_crip);
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($res);

//se o usuário e senha estiverem corretos, redirecionar para o painel
if($linhas > 0){
    $_SESSION['nome'] = $res[0]['nome'];
    $_SESSION['id'] = $res[0]['id'];
    $_SESSION['nivel'] = $res[0]['nivel'];
    
    header('Location: painel');
} else {
    echo '<script>alert("Usuário ou senha incorretos!");</script>';
    echo '<script>window.location.href = "index.php";</script>';
    
}

// Diferença entre query e prepare: query é para consultas simples, prepare é para consultas mais complexas. E prepare é mais seguro, pois evita SQL Injection.

//Diferença entre bindValue e bindParam: bindValue é para valores, bindParam é para variáveis. bindValue pode ser usado para valores e variáveis, mas bindParam só pode ser usado para variáveis.

?>