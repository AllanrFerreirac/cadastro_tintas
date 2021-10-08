<?php
    class Handler
    {
        public static function arrayHandler()
        {
            $a = [];
            $a['nome'] = $_POST['nome'];
            $a['celular'] = $_POST['celular'];
            $a['email'] = $_POST['email'];

            $gravar = $_POST['nome']."|".$_POST['celular']."|".$_POST['email']."|";
            $arquivo = fopen('contatos.txt', 'a+');
            fwrite($arquivo, $gravar);
            fclose($arquivo);
            return $a;
        }
    }
?>