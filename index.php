<?php 
require_once 'conexao.php';

//verificar se o usuário e senha estão corretos
$query = $pdo->query("SELECT * FROM usuarios");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($res);

if($linhas == 0){
    $query = $pdo->query("INSERT INTO usuarios SET nome = '$nomeSistema', email = '$emailSistema',");
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Template</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="login">
        <div class="form">
            <img src="img/logo.png" class="imagem">
            <form method="post" action="autenticar.php">
                <input type="email" name="usuario" placeholder="Digite seu e-mail">
                <input type="password" name="senha" placeholder="Digite sua senha">
                <button>Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>