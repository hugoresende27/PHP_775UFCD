<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficheiros 2</title>
</head>
<body>

<?php
    $fileName = "file1.txt";
    $fileName2 = "file12.txt";
    // READ "R"
    $fh = fopen($fileName, "r") or die("ERRO: impossível ler o ficheiro $fileName!");

    //ler o ficheiro FREAD
    $dados = fread($fh, 8);//ler 8 chars
    $dados = fread($fh, filesize($fileName));//ler 8 chars
    echo "<p> $dados </p>";
    
    fclose($fh);


    unlink($fileName); //apagar o ficheiro

    

?>
    
</body>
</html>