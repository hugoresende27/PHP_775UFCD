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
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href ="css/estilos.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
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
$ficheiro = fopen('contactos.txt', 'r');
while(!feof($ficheiro)){
    //echo de fgets no file handler
    $temp = fgets($ficheiro); ?>
    
        <div class="caixaFile"  >
            <p ><?=$temp?></p>
        </div>
    
    <?php
}


fclose($ficheiro);

?>

<a href="formularios2.php" class="botao">Voltar</a>

</div>
</body>
</html>