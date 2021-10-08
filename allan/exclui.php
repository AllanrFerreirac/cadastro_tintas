<?php
    $posicao = $_GET['posicao'];
    $arquivo = fopen("contatos.txt", "r");
    $arquivo2 = fopen("contatos2.txt", "a+");
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
    unlink("contatos.txt");
    rename("contatos2.txt","contatos.txt");
    $arquivo = fopen("contatos.txt", "a+");
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
            alert('Contato excluído com sucesso!');
            window.location.href='index.php';
            </script>";
?>