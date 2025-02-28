<?php
include("./connection/db.php");

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$dt_nascimento = $_POST['dt_nascimento'];

$sql = "INSERT INTO users (nome, endereco, telefone, email, data_nascimento) VALUES ('$nome', '$endereco', '$telefone', '$email', '$dt_nascimento')";

$stmt = $pdo->prepare($sql);

if ($stmt->execute()) {
    header('Location: http://localhost:85');
} else {
    echo "Erro ao cadastrar o usuário.";
}
?>