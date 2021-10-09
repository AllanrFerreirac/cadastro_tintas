<?php
    $arquivo = fopen("cor.txt", "r");
    $arquivo2 = fopen("cor2.txt", "a+");
    while(!feof($arquivo))
    {
        $pessoa = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
    $posicao = $_GET['posicao'];
    $nome = $_POST['codigo1'];
    $celular = $_POST['marca'];
    $email = $_POST['nomenclatura'];
    $pessoa[$posicao] = $nome;
    $pessoa[$posicao+1] = $celular;
    $pessoa[$posicao+2] = $email;
    unlink("cor.txt");
    rename("cor2.txt","cor.txt");
    $arquivo = fopen("cor.txt", "a+");
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
            alert('Cadastro de cor editado com sucesso!');
            window.location.href='cores.php';
            </script>";
?>