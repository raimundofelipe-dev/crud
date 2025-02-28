
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
    <div class="conteiner">
         <div class="row">
             <div class="col">
                 <h1>Cadastro</h1>
                    <form action="./create.php" method="post">
                    <div class="form-group">
                         <label for="nome">Nome completo</label>
                         <input type="text" class="form-control" name="nome" required>
                     </div>
                     <div class="form-group">
                         <label for="endereco">Endereço</label>
                         <input type="text" class="form-control" name="endereco" required>
                     </div>
                     <div class="form-group">
                         <label for="telefone">Telefone</label>
                         <input type="text"class="form-control" name="telefone" required>
                     </div>
                     <div class="form-group">
                         <label for="telefone">Email</label>
                         <input type="email" class="form-control" name="email" required>
                     </div>
                     <div class="form-group">
                         <label for="telefone">Data de Nascimento</label>
                         <input type="date" class="form-control" name="dt_nascimento" required>
                     </div>
                     <div class="form-group">
                         <input type="submit" class="btn btn-success mt-3" value="Cadastrar">
                     </div>
                    </form>
                    <a href="index.php" class="btn btn-primary mt-3 btn-lg">Voltar para o inicio</a>
             </div>
         </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap 35--> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body> 
</html>
