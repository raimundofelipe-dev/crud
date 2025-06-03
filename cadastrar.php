<<?php
    // Carrega os arquivos com as classes automaticamente via Composer
    require __DIR__ . '/vendor/autoload.php';

    use \App\Entity\Vaga;

    // Ativa a exibição de erros (útil para ambiente de desenvolvimento)
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Verifica se o formulário foi enviado (validação do POST)
    if (isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])) {

        // Cria um novo objeto da classe Vaga
        $pVaga = new Vaga;

        // Atribui os valores do formulário aos atributos da vaga
        $pVaga->titulo = $_POST['titulo'];
        $pVaga->descricao = $_POST['descricao'];
        $pVaga->ativo = $_POST['ativo'];

        // Chama o método que salva no banco de dados
        $pVaga->cadastrar();

        // Redireciona para a página inicial com status de sucesso
        header('location: index.php?status=success');
        exit;
    }

    // Inclui as partes visuais da página
    include __DIR__ . '/includes/header.php';
    include __DIR__ . '/includes/formulario.php';
    include __DIR__ . '/includes/footer.php';
