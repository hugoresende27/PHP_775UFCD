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
    
    <title>Formularios 1</title>
</head>
<body>

<?php

//file handler aqui para ler 
$ficheiro = fopen('contactos.txt', 'r');
while(!feof($ficheiro)){
    //echo de fgets no file handler
    $temp = fgets($ficheiro); ?>
    <p ><?=$temp?></p>
    <?php
}


fclose($ficheiro);

?>

<a href="formularios2.php" class="botao">Voltar</a>

    
</body>
</html>