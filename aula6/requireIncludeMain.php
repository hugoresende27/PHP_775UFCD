<?php

    //include não dá fatal erro se ficheiro não existir, require dá erro se ficheiro não existir.
    //require mais usado quando necessita por exemplo de uma ligação a bd obrigatória
    //ambos dão Warning, mas apenas o require dá fatal error e não executa mais código para baixo

    //require_once e include_once apenas vai incluir se ainda não tiver sido incluido



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css"/>
    <title>Require e includes</title>
</head>
<body>

    <h1>Main page de requires e includes</h1>

    <?php   
    
        include 'header.php';
        include 'exemplo_Inc.php';
        //require 'exemplo_Inc.php';
        include 'footer.php';
    ?>


    <h1>Fim da página Main</h1>
    
</body>
</html>