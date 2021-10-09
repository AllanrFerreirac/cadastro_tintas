<?php
    $arquivo = fopen("cor.txt", "r");
    while(!feof($arquivo))
    {
        $contato = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body style="background-color: #FAFAD2">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Código interno</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Nomenclatura</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        $numero = count($contato);
                        $i = 0;
                        while($i <= $numero-3)
                        {
                    ?>
                    <th scope = "row"><?php echo $contato[$i]; ?></th>
                    <td><?php echo $contato[$i+1]; ?></td>
                    <td><?php echo $contato[$i+2]; ?></td>
                    <td><a href="editar.php?posicao=<?php echo $i; ?>"<button type="button" class="btn btn-success">Editar</button></a> | <a href="exclui.php?posicao=<?php echo $i; ?>"<button type="button" class="btn btn-danger">Excluir</button></a></td>
                <?php
                    $i = $i + 3;
                    echo "</tr>";
                        }
                ?>
            </tbody>
        </table>
    </body>
</html>