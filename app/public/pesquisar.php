<?php
require_once 'pesquisa_script.php';
?>

<!doctype html> 
<html lang="en"> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Pesquisar</title>
</head>
<body>
    <div class="container mt-4">
        <h1>Pesquisar</h1>

        <!-- Mensagem de sucesso após exclusão -->
        <?php if (isset($_GET['mensagem']) && $_GET['mensagem'] === 'excluido'): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Usuário excluído com sucesso!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
            </div>
        <?php endif; ?>

        <nav class="navbar navbar-light bg-light mb-3">
            <div class="container-fluid">
                <form class="d-flex" action="pesquisar.php" method="POST">
                    <input class="form-control me-2" type="search" placeholder="Nome" name="busca" autofocus>
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Data de Nascimento</th>
                    <th>Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($usuarios)): ?>
                    <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?= htmlspecialchars($usuario['nome']) ?></td>
                            <td><?= htmlspecialchars($usuario['endereco']) ?></td>
                            <td><?= htmlspecialchars($usuario['telefone']) ?></td>
                            <td><?= htmlspecialchars($usuario['email']) ?></td>
                            <td><?= htmlspecialchars(formatarData($usuario['data_nascimento'])) ?></td>
                            <td>
                                <a href="edita_cadastro.php?id=<?= $usuario['id'] ?>" class="btn btn-success btn-sm">Editar</a>

                                <!-- Botão que abre o modal certo -->
                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirma<?= $usuario['id'] ?>">
                                    Excluir
                                </button>
                            </td>
                        </tr>

                        <!-- Modal de confirmação -->
                        <div class="modal fade" id="confirma<?= $usuario['id'] ?>" tabindex="-1" aria-labelledby="label<?= $usuario['id'] ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="excluir_script.php" method="POST">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="label<?= $usuario['id'] ?>">Confirmar Exclusão</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                                        </div>
                                        <div class="modal-body">
                                            Tem certeza que deseja excluir o usuário <strong><?= htmlspecialchars($usuario['nome']) ?></strong>?
                                            <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-danger">Excluir</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Nenhum resultado encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <a href="Index.php" class="btn btn-info">Voltar para o Início</a>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body> 
</html>
