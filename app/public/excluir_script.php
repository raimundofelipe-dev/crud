<?php
require_once 'connection/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = (int) $_POST['id']; // Garante que é um número

    try {
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$id]); // Executa o DELETE

        header("Location: pesquisar.php?mensagem=excluido"); // Redireciona com mensagem
        exit;

    } catch (PDOException $e) {
        echo "Erro ao excluir usuário: " . $e->getMessage();
    }
} else {
    echo "ID inválido.";
}
