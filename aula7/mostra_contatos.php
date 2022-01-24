<?php
    //alguns servidores não têm definidos o EOL End of Line
    if (!defined("PHP_EOL")){
        define ("PHP_EOL", "\r\n");
    }

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8"  />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href ="css/estilos.css"/>
    <title>Formularios 1</title>
</head>
<body>
<div class="main">
<div class="text-center">
<a href="formularios2.php"><button type="button" class="btn btn-warning">Voltar</button></a>
</div>

<div class="text-center">
  <h1>FICHEIRO</h1>
</div>
<?php

//file handler aqui para ler 
$ficheiro = fopen('contactos.txt', 'r') or die("Não foi possvel abrir o ficheiro");   //r+ ler e escrever ; w+ ler e escrever ; a+ ler e escrever

while(!feof($ficheiro)){
    //echo de fgets no file handler
    
   // $temp = fgets($ficheiro);
   // echo $temp;
    $letra = fgetc($ficheiro); 
    if ($letra == "\n"){
    //if ($letra == ":"){
        echo "<br>";
    }
    echo $letra;    
    
}

//echo fread($ficheiro, filesize("contactos.txt")); 
//echo fgets($ficheiro);

fclose($ficheiro);

?>

</div>

<!-- ZONA DOS SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>