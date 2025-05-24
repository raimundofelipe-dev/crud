<!doctype html> 
<html lang="en"> 
<head> 
<!-- Required meta tags --> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no"> 

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

       <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                 <h1>Cadrastro</h1>
                     <form action="cadastro_script.php" method="post">
                         <div class="form-group">
                             <label for="nome">Nome Completo</label>
                             <input type="text" class="form-control" placeholder="Nome Completo" name="nome" required>
                         </div>
                         <div class="form-group">
                             <label for="endereco">Endereço</label>
                             <input type="text" class="form-control" placeholder="Endereco" name="endereco">
                         </div>
                         <div class="form-group">
                             <label for="telefone">Telefone</label>
                             <input type="text" class="form-control" placeholder="Telefone" name="telefone">
                         </div>
                         <div class="form-group">
                             <label for="telefone">Email</label>
                             <input type="email" class="form-control" placeholder="Email" name="email">
                         </div>
                          <div class="form-group">
                             <label for="telefone">Data de Nascimento</label>
                             <input type="date" class="form-control" placeholder="Data de Nascimento" name="data_nascimento">
                         </div>
                         <div class="form-group">
                             <input type="submit" class="btn btn-primary" value="Enviar">
                         </div>
                     </form>
                     <a href="Index.php" class="btn btn-primary" role="button">Inicio</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body> 
</html>




