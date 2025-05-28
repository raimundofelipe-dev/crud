<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Vaga;

ini_set('display_errors', 1);
error_reporting(E_ALL);

//validação do POST
if (isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])) {
    $pVaga = new Vaga;
    $pVaga->titulo = $_POST['titulo'];
    $pVaga->descricao = $_POST['descricao'];
    $pVaga->ativo = $_POST['ativo'];
    $pVaga->cadastrar();
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';
