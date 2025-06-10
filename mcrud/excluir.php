<?php
require __DIR__ . '/vendor/autoload.php';

use App\Entity\Vaga;



if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    header('location:index.php?status=error');
    exit;
}

$obVaga = Vaga::getVaga($_GET['id']);

if (!$obVaga instanceof Vaga) {
    header('location:index.php?status=error');
    exit;
}

if (isset($_POST['excluir'])) {


    $obVaga->excluir();

    header('location:index.php?status=success');
    exit;
};


require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/confirmar-exclusao.php';
require __DIR__ . '/includes/footer.php';
