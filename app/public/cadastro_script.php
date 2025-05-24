<?php
require_once 'connection/db.php';

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];

try {
$stmt = $pdo->prepare("INSERT INTO users(`nome`, `endereco`, `telefone`, `email`, `data_nascimento`) VALUES (?, ?, ?, ?, ?)");
$stmt->execute([$nome, $endereco, $telefone, $email, $data_nascimento]);


    echo "$nome você cadrastrado com sucesso!";
} catch(PDOException $e) {
    echo "Erro ao cadrastrar $nome" .  $e->getMessage();
}