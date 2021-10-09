<?php
    require 'cadpro.php';
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
    <body style="background-color: #FAFAD2">
    <header>
            <center><img src="imagens/gif.gif" width="30%" height="30%"/> 
            <nav class="navbar navbar-expand-lg navbar-light bg-light"></center>
                <a href="index.php"><button class="btn btn-link">Inicio</button></a>            
                <div class="container-fluid" style="background-color: #F4A460;">
                    <center><b><h1><font size="10"><font face="Vineta BT">WEB TINTAS</font></font></h1></b></center>
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
                            echo "<b>Código Externo: </b>".$dados['codigo2']."<br/>";
                            echo "<b>Nome do Produto: </b>".$dados['produto']."<br/>";
                            echo "<b>Valor: </b>".$dados['valor']."<br/>";
                        ?>
                        <br/><br/>
                        <a href="produtos.php"><button class="btn btn-outline-success">Voltar</button></a>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <hr/>
            <center><b>Formulário para Cadastro Desenvolvido por Allan e Alisson</b></center>
        </footer>
    </body>
</html>