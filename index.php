<?php 
require_once 'conexao.php';

//verificar se o usuário e senha estão corretos
$query = $pdo->query("SELECT * FROM usuarios");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($res);

$senha = '123';
$senha_crip = md5($senha);
if($linhas == 0){
    $pdo->query("INSERT INTO usuarios SET nome = '$nome_sistema', email = '$email_sistema', senha = '$senha', senha_crip = '$senha_crip', nivel = 'Administrador', ativo = 'Sim', foto = 'sem-foto.jpg', telefone = '$telefone_sistema', endereco = '$endereco_sistema' ");
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
                <input type="email" name="usuario" placeholder="Digite seu e-mail" required>
                <input type="password" name="senha" placeholder="Digite sua senha" required>
                <button>Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>