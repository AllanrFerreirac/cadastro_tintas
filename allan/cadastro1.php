<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <form action="cad.php" method="POST">
            <div class="form-group">
                <label>Código Interno</label>
                <input type="number" class="form-control" name="nome" placeholder="Insira o código interno" required/>
                <br/>
                <label>Marca</label>
                <input type="text" class="form-control" name="celular" placeholder="Insira a marca" required/>
                <br/>
                <label>Nomeclatura</label>
                <input type="text" class="form-control" name="email" placeholder="Insira a nomeclatura" required/>
                <br/>
                <button type="submit" class="btn btn-outline-success">Cadastrar</button>
            </div>
        </form>
    </body>
</html>