<!DOCTYPE HTML>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Cadastro Produtos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 style="text-align:center;">Cadastro de Produtos</h1>
            <br>
            <form action="CRUD/cad_produto.php" method="post">
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Nome produto: </label>
                        <input type="text" name="nome_prod" id="" class="form-control">
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Quantidade do produto: </label>
                        <input type="text" name="qtd_prod" id="" class="form-control">
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Valor do produto: </label>
                        <input type="text" name="valor_prod" id="" class="form-control">
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Categoria do produto: </label>
                        <input type="text" name="cat_prod" id="" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <input type="submit" value="CADASTRAR PRODUTO" class="btn btn-success">
                        <a href="tabela.php" class="btn btn-primary float-end">LISTAR PRODUTOS</a>
                    </div>
                </div>     
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>