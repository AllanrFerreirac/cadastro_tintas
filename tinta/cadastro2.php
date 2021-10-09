<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body style="background-color: #FAFAD2">>
        <form action="cad2.php" method="POST">
            <div class="form-group">
                <label>Código Externo</label>
                <input type="number" class="form-control" name="codigo2" placeholder="Insira o código externo" required/>
                <br/>
                <label>Nome do Produto</label>
                <input type="text" class="form-control" name="produto" placeholder="Insira o nome do produto" required/>
                <br/>
                <label>Valor</label>
                <input type="number" class="form-control" name="valor" placeholder="Insira o valor" required/>
                <br/>
                <button type="submit" class="btn btn-outline-success">Cadastrar</button>
            </div>
        </form>
    </body>
</html>