<?php
    $arquivo = fopen("contatos.txt", "r");
    $arquivo2 = fopen("contatos2.txt", "a+");
    while(!feof($arquivo))
    {
        $pessoa = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
    $posicao = $_GET['posicao'];
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $pessoa[$posicao] = $nome;
    $pessoa[$posicao+1] = $celular;
    $pessoa[$posicao+2] = $email;
    unlink("contatos.txt");
    rename("contatos2.txt","contatos.txt");
    $arquivo = fopen("contatos.txt", "a+");
    $contador = count($pessoa);
    $i = 0;
    while($i <= $contador - 1)
    {
        $gravar = $pessoa[$i]."|";
        fwrite($arquivo, $gravar);
        $i++;
    }
    fclose($arquivo2);
    fclose($arquivo);
    echo "<script>
            alert('Contato editado com sucesso!');
            window.location.href='index.php';
            </script>";
?>