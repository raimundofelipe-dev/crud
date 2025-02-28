
<?php
include("./connection/db.php");

$busca = isset($_POST['busca']) ? $_POST['busca'] : '';

// Consulta ao banco de dados
$sql = "SELECT * FROM users WHERE nome LIKE :busca";
$stmt = $pdo->prepare($sql);
$stmt->execute(['busca' => "%$busca%"]);

$usuarios = $stmt->fetchAll();
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
                 <h1>Pesquisa</h1>
                     <nav class="navbar bg-body-tertiary">
                         <div class="container-fluid">
                             <form class="d-flex" role="search" action="pesquisa.php" method="post">
                                 <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="busca">
                                 <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                             </form>
                         </div>
                     </nav>
                     <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Endereco</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Data de Nascimento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($usuarios) > 0): ?>
                                <?php foreach($usuarios as $usuario): ?>
                                    <tr>
                                        <th scope="row"><?php echo $usuario['nome']; ?></th>
                                        <td><?php echo $usuario['endereco']; ?></td>
                                        <td><?php echo $usuario['telefone']; ?></td>
                                        <td><?php echo $usuario['email']; ?></td>
                                        <td><?php echo $usuario['data_nascimento']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5">Nenhum usuário encontrado.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                     </table>
                    <a href="index.php" class="btn btn-primary mt-3 btn-lg">Voltar para o inicio</a>
             </div>
         </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap 35--> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body> 
</html>
