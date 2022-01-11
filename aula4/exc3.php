<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exc 3</title>
</head>
<body>
    <p>Escreva uma função que diga se um número é par ou impar</p>
    

    <?php

        function parImpar($num){
            echo ($num % 2 == 0) ? $num : null;
        }
        function parImpar2($num){
            return ($num % 2 == 0) ? "PAR" : "IMPAR";
        }

        $x=31;
        $z=18;
        echo "<p>".$x."->".parImpar2($x);
        echo "<p>".$z."->".parImpar2($z);

        echo "<p>".$x."-".parImpar($x);
        echo "<p>".$z."-".parImpar($z);


    ?>
</body>
</html>