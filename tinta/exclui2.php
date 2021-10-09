<?php
    $posicao = $_GET['posicao'];
    $arquivo = fopen("produto.txt", "r");
    $arquivo2 = fopen("produto2.txt", "a+");
    while(!feof($arquivo))
    {
        $pessoa = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
    $exclui = $posicao + 3;
    for($i = $posicao; $i < $exclui; $i++)
    {
        unset($pessoa[$i]);
    }
    $contato = array();
    foreach($pessoa as $pessoa2)
    {
        $contato[] = $pessoa2;
    }
    unlink("produto.txt");
    rename("produto2.txt","produto.txt");
    $arquivo = fopen("produto.txt", "a+");
    $contador = count($contato);
    $i = 0;
    while($i <= $contador - 1)
    {
        $gravar = $contato[$i]."|";
        fwrite($arquivo, $gravar);
        $i++;
    }
    fclose($arquivo2);
    fclose($arquivo);
    echo "<script>
            alert('Cadastro de produto excluído com sucesso!');
            window.location.href='index.php';
            </script>";
?>