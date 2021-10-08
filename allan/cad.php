<?php
    require 'cadpessoa.php';
    $dados = Handler::arrayHandler();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <img src="imagens/logo_contatos.png" width="20%" height="20%"/>
            <nav class="navbar navbar-expand-lg navbar-ligth bg-ligth">
                <div class="container-fluid">
                    <h3>Contatos</h3>
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastrar Contatos</button>
                </div>
            </nav>
        </header>
        <br/><br/>
        <div class="row justify-content-center row-cols-2 row-cols-md-2 mb-3 text-justify">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3 text-center">
                        <h4 class="my-0 fw-normal"><b>Confirmação de Cadastro</b></h4>
                    </div>
                    <div class="card-body">
                        <?php
                            echo "<b>Nome:</b>".$dados['nome']."<br/>";
                            echo "<b>Celular:</b>".$dados['celular']."<br/>";
                            echo "<b>E-mail:</b>".$dados['email']."<br/>";
                        ?>
                        <br/><br/>
                        <a href="index.php"><button class="btn btn-outline-success">Voltar</button></a>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <hr/>
            <center><b>Agenda de Contatos - Desenvolvida pela turma TDS06 - 2021</b></center>
        </footer>
    </body>
</html>