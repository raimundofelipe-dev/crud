<?php
require_once 'connection/db.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
$usuario = $stmt->fetch();

if (!$usuario) {
    die("Usuário não encontrado.");
}
?>

<!doctype html> 
<html lang="en"> 
<head> 
<!-- Required meta tags --> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no"> 

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

       <title>Alteração de Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                 <h1>Edite seu Cadrastro</h1>
                     <form action="atualiza_cadrastro.php" method="post">
                         <div class="form-group">
                             <label for="nome">Nome Completo</label>
                             <input type="text" class="form-control" placeholder="Nome Completo" name="nome" required value="<?=$usuario['nome']?>">
                         </div>
                         <div class="form-group">
                             <label for="endereco">Endereço</label>
                             <input type="text" class="form-control" placeholder="Endereco" name="endereco" value="<?=$usuario['endereco']?>">
                         </div>
                         <div class="form-group">
                             <label for="telefone">Telefone</label>
                             <input type="text" class="form-control" placeholder="Telefone" name="telefone" value="<?=$usuario['telefone']?>">
                         </div>
                         <div class="form-group">
                             <label for="telefone">Email</label>
                             <input type="email" class="form-control" placeholder="Email" name="email" value="<?=$usuario['email']?>">
                         </div>
                          <div class="form-group">
                             <label for="telefone">Data de Nascimento</label>
                             <input type="date" class="form-control" placeholder="Data de Nascimento" name="data_nascimento" value="<?=$usuario['data_nascimento']?>">
                         </div>
                         <div class="form-group">
                             <input type="submit" class="btn btn-primary" value="Salvar ALterações">
                              <input type="hidden" name="id" value="<?=$usuario['id']?>">
                         </div>
                     </form>
                     <a href="Index.php" class="btn btn-primary" role="button">Voltar para o Inicio</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body> 
</html>




