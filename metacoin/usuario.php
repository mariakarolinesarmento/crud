<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Usuário</title>
</head>
<body>
<div class="container">
    <h1 style="text-align: center;">Usuário</h1>
    <br>
    <form action="CRUD/cad_usuario.php" method="post">
        <div class="form-group offset-md-3">
        <div class="col-md-6">
        <label for="">Nome do Usuário: </label>
        <input type="text" name="nome_usuario" id="" class="form-control">
        </div>
        </div>
        <div class="form-group offset-md-3">
        <div class="col-md-6">
        <label for="">CPF do Usuário:</label>
        <input type="text" name="CPF" id="" class="form-control">
        </div>
        </div>
        <div class="form-group offset-md-3">
        <div class="col-md-6">
        <label for="">Endereço do Usuário: </label>
        <input type="text" name="endereco_usuario" id="" class="form-control">
        </div>
        </div>
        <div class="form-group offset-md-3">
        <div class="col-md-6">
        <label for="">E-mail: </label>
        <input type="text" name="email_usuario" id="" class="form-control">
        </div>
        </div>
        <div class="form-group offset-md-3">
        <div class="col-md-6">
        <label for="">Senha: </label>
        <input type="text" name="senha" id="" class="form-control">
        </div>
        </div>
        <div class="form-group offset-md-3">
        <div class="col-md-6 pt-3">
        <input type="submit" value="CADASTRAR" class="btn btn-success">
        </div>
        </div>
        
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
    
</body>
</html>