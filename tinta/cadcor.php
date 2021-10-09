<?php
    class Handler
    {
        public static function arrayHandler()
        {
            $a = [];
            $a['codigo1'] = $_POST['codigo1'];
            $a['marca'] = $_POST['marca'];
            $a['nomenclatura'] = $_POST['nomenclatura'];

            $gravar = $_POST['codigo1']."|".$_POST['marca']."|".$_POST['nomenclatura']."|";
            $arquivo = fopen('cor.txt', 'a+');
            fwrite($arquivo, $gravar);
            fclose($arquivo);
            return $a;
        }
    }
?>