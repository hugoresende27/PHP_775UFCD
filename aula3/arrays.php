<!DOCTYPE html>
<html lang="pt
">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php

        $e = array(
            10=> 'BENFICA',
            20=> 'PORTO',
            1=> 'BRAGA',
            2=>'NAVAL'
        );

        //array_pop($e); //elimina o ultimo elemento
        array_push($e ,"TESTE");    //INSERE novo elemento na ultima posição

        echo "<pre>";
        print_r($e);
        echo "</pre>";


    ?>
</body>
</html>