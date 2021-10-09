<?php
    $arquivo = fopen("produto.txt", "r");
    $arquivo2 = fopen("produto2.txt", "a+");
    while(!feof($arquivo))
    {
        $pessoa = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
    $posicao = $_GET['posicao'];
    $nome = $_POST['codigo2'];
    $celular = $_POST['produto'];
    $email = $_POST['valor'];
    $pessoa[$posicao] = $nome;
    $pessoa[$posicao+1] = $celular;
    $pessoa[$posicao+2] = $email;
    unlink("produto.txt");
    rename("produto2.txt","produto.txt");
    $arquivo = fopen("produto.txt", "a+");
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
            alert('Cadastro de produtos editado com sucesso!');
            window.location.href='produtos.php';
            </script>";
?>