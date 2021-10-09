<?php
    $posicao = $_GET['posicao'];
    $arquivo = fopen("cor.txt", "r");
    $arquivo2 = fopen("cor2.txt", "a+");
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
    unlink("cor.txt");
    rename("cor2.txt","cor.txt");
    $arquivo = fopen("cor.txt", "a+");
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
            alert('Cadastro de cor excluído com sucesso!');
            window.location.href='index.php';
            </script>";
?>