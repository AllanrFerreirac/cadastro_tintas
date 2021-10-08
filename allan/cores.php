<!DOCTYPE html>
<html lang="pt=br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, init+ial-scale=1"/> <!-- essa função faz com que o site otimize o tamanho por onde ele for acessado (tablet,celular,desktop)-->
        <title>WEB TINTAS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <header>
            <center><img src="imagens/gif.gif" width="30%" height="30%"/> <!--Colocar imagem e o tamanho "%"--> 
            <nav class="navbar navbar-expand-lg navbar-light bg-light"></center>
                <div class="container-fluid" style="background-color: #F4A460;">
                    <center><b><h1><font size="10"><font face="Vineta BT">WEB TINTAS</font></font></h1></b></center>
                </div>
                <div>
                    <center><button type="button" class="btn btn-outline-dark"data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastrar Cores</button></center>
                </div>    
            </nav>
        </header>
            <div class="container-fluid"> 
                <section>
                <br/>
                    <div class="row justify-content-center row-cols-2 row-cols-md-1 mb-3 text-center">
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-hearder py-3">
                                    <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-palette2" viewBox="0 0 16 16">
                                        <path d="M0 .5A.5.5 0 0 1 .5 0h5a.5.5 0 0 1 .5.5v5.277l4.147-4.131a.5.5 0 0 1 .707 0l3.535 3.536a.5.5 0 0 1 0 .708L10.261 10H15.5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5H3a2.99 2.99 0 0 1-2.121-.879A2.99 2.99 0 0 1 0 13.044m6-.21 7.328-7.3-2.829-2.828L6 7.188v5.647zM4.5 13a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zM15 15v-4H9.258l-4.015 4H15zM0 .5v12.495V.5z"/>
                                        <path d="M0 12.995V13a3.07 3.07 0 0 0 0-.005z"/>
                                    </svg><b>Cadastro de Cores</b></h4>
                                </div>
                                <div class="card-body">
                                <b><h5>
                                    <?php
                                        include 'lista1.php';                                   
                                    ?>
                                 </b> </h5>  
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    <div class="modal-body">
                         <?php
                            include 'cadastro1.php';
                         ?>
                     </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        <footer>
            <hr/>
            <center><b>Formulário para Cadastro
            <p>Desenvolvido por Allan e Alisson</p></b></center>
        </footer>
    </body>
</html>
