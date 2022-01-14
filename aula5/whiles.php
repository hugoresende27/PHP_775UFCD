<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while</title>
</head>
<body>
<?php
    while(1){
        echo "ola";
        break;
    }

    echo "<br> var++ ::: ";

    $cont = 1;
    while ($cont <=10){
        echo "$cont ->".$cont++;
    }


    echo "<br> ++var ::: ";
    $cont = 1;
    while ($cont <=10){
        echo "$cont ->".++$cont;
    }

    echo "<br>";
    do {
        echo "$cont é igual a ".$cont++;
    }while ($cont <= 10);

    
    ?>
</body>
</html>l