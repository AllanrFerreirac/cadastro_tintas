<?php
    class Handler
    {
        public static function arrayHandler()
        {
            $a = [];
            $a['codigo2'] = $_POST['codigo2'];
            $a['produto'] = $_POST['produto'];
            $a['valor'] = $_POST['valor'];

            $gravar = $_POST['codigo2']."|".$_POST['produto']."|".$_POST['valor']."|";
            $arquivo = fopen('produto.txt', 'a+');
            fwrite($arquivo, $gravar);
            fclose($arquivo);
            return $a;
        }
    }
?>