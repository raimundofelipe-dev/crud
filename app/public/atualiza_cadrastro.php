<?php
require_once 'connection/db.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];

try {
    $stmt = $pdo->prepare("UPDATE users SET nome = ?, endereco = ?, telefone = ?, email = ?, data_nascimento = ? WHERE id = ?");
    $stmt->execute([$nome, $endereco, $telefone, $email, $data_nascimento, $id]);
    echo "Usuário atualizado com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao atualizar: " . $e->getMessage();
}
?>

