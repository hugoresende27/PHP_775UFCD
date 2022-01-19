<?php

//MODO APPEND VAI CRIAR FICHEIRO OU ACRESCENTAR SE JÁ EXISTIR
//MODO WRITE VAI SEMPRE CRIAR FICHEIRO NOVO

    $fileName = "file1.txt";
    //WRITE "W"
    //$fh = fopen($fileName,"w") or die("ERRO: impossível criar o ficheiro $filename");

    $escrever = "Funciona ! está a escrever no ficheiro....".PHP_EOL;
    //fwrite($fh,$escrever);
    echo "<p>Ficheiro criado!!!</p>";

    $escrever2 = "Mais uma frase";
    //fwrite($fh,$escrever2);
    echo "<p>Ficheiro criado 2!!!</p>";
    

    $escrever3 = "ISTO AFINAL É FACIL ".PHP_EOL."MAIS um texto2";
    //fwrite($fh,$escrever3);
    echo "<p>Ficheiro criado 3!!!</p>";
    

    $fh = fopen($fileName,"a") or die("ERRO: impossível abrir e acrescentar o ficheiro $filename");
    $escrever4 = "adicionar conteudo modo 'a' ".PHP_EOL."MAIS um texto 66666666";
    fwrite($fh,$escrever4);
    echo "<p>Ficheiro acrescentado 3!!!</p>";

    $fh = fopen($fileName,"r") or die("ERRO: ler e abrir o ficheiro $filename");
    
    $teste = fread($fh,filesize($fileName));
    echo "<p>Ficheiro acrescentado 3!!! $teste</p>";



    fclose($fh);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de manipulação de Ficheiros em php</title>
</head>
<body>
    
</body>
</html>