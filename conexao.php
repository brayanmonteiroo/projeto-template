<?php
//definir fuso horário
date_default_timezone_set('America/Belem');

//dados para conexão
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'projeto-template';

//conexão com o banco de dados
try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "DEBUG: Conexão realizada com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao conectar: <br>";
    //mensagem para desenvolvimento, em produção deve ser desativado
    echo $e->getMessage();
}


//Variáveis globais
$nome_sistema = "Brayan Monteiro";
$email_sistema = "brayanmonteirooo@gmail.com";
$telefone_sistema = "(91) 98183-1557";
$endereco_sistema = "Avenida Ceará, nº 652, Belém - PA";


?>