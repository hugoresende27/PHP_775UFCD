<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/estilos.css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for e foreach</title>
</head>
<body>
    <?php

    $vetor = array("um" => 1,
                   "dois" => "Número dois",
                   "tres" => 3,
                   "quatro" => 4);

    echo "<pre>";
    print_r($vetor);

    foreach ($vetor as $chave => $elementos){
        echo "a chave <span class='negrito'>".$chave."--- </span>tem o valor ".$elementos."<br>";
    };

  
    foreach ($vetor as $identificador => $elemento) {
        if ($elemento == "Número dois")
            $vetor[$identificador] = 2;
    }
    foreach ($vetor as $chave => $elementos){
        echo "a chave <span class='negrito'>".$chave."--- </span>tem o valor ".$elementos."<br>";
    };

    echo "<pre>";
    print_r($vetor);

?>
    
</body>
</html>