<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exc Vars</title>
</head>
<body>

<?php

    $nome = "Femea";
    $Nome = "Femm";
    echo "$nome, $Nome <br>";

    //$1teste ="teste"; //ERRO
    $_1TESTE ="TESTE";
    echo $_SERVER["DOCUMENT_ROOT"];

    /*NÃO FUNCIONA, $b DEFINIDO FORA DA FUNÇÃO
    $b = 5;
    function t(){
        echo "$b";
    }
    */

    $a =5;
    echo "<p>ANTES:: $a </p>";

    function teste2 (){
        $a = 69;
        echo "DENTRO DA FUN:: $a";
    }

    teste2();

    echo "<p>DEPOIS:: $a </p>";


    //CONSTANTE EM PHP _MAIUSCULAS_
    define('_NOME_','Hugo');       
    define ('_IDADE_',33);

    //constantes tem de ser juntas com .
    echo "<p>O "._NOME_." tem "._IDADE_." anos </p>";
   


?>
    
</body>
</html>