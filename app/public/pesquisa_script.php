<?php
require_once 'connection/db.php';

$pesquisa = isset($_POST['busca']) ? $_POST['busca'] : '';

$stmt =$pdo->prepare("SELECT * FROM users WHERE nome LIKE :pesquisa");
$stmt->execute(['pesquisa' => "%$pesquisa%"]);
$usuarios = $stmt->fetchAll();