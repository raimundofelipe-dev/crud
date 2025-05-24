<?php
require_once 'pesquisa_script.php';
?>

<!doctype html> 
<html lang="en"> 
<head> 
<!-- Required meta tags --> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no"> 

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

       <title>Pesquisar</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pesquisar</h1>
                     <nav class="navbar navbar-light bg-light">
                         <div class="container-fluid">
                             <form class="d-flex" action="pesquisar.php" method="POST">
                                 <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
                                 <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                             </form>
                         </div>
                    </nav>
                    <table class="table table-hover">
                        <thead>
                            <th scope="col">nome</th>
                            <th scope="col">endereco</th>
                            <th scope="col">telefone</th>
                            <th scope="col">email</th>
                            <th scope="col">data_nascimento</th>
                            <th scope="col">funções</th>
                        </thead>
                        <tbody>
                            <?php if (!empty($usuarios)): ?>
                              <?php foreach ($usuarios as $usuario): ?>
                            <tr>
                                <td><?= $usuario['nome']?></td>
                                <td><?= $usuario['endereco']?></td>
                                <td><?= $usuario['telefone']?></td>
                                <td><?= $usuario['email']?></td>
                                <td><?= formatarData($usuario['data_nascimento'])?></td>
                                <td>
                                 <a href="edita_cadastro.php?id=<?= $usuario['id']?>" class="btn btn-success">editar</a>
                                <a href="exclui_cadastro.php" class="btn btn-danger">excluir</a>
                               </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php else: ?>
                            <tr>
                                 <td colspan="5" class="text-center">Nenhum resultado encontrado.</td>
                             </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>



                    <a href="Index.php" class="btn btn-info">Voltar para o Inicio</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body> 
</html>





