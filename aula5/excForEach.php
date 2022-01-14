<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exc forEach</title>
</head>
<body>
    <?php

    $vetor = array("um" => 1,
                    "dois" => "Número dois",
                    "tres" => 3,
                    "quatro" => 4);

    $cont = 5;

    foreach($vetor as $chave => $valor){
            $vetor[$chave] = $cont;
            $cont++; 
    }
    echo "<pre>";
    print_r($vetor);

?>
    
</body>
</html>