<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exc 2</title>
</head>
<body>
    <p>Exercício 2:
	Escreva uma função que calcule o cubo de um número.
	Teste 2 vezes com valores a serem impressos no browser.</p>

    <?php

        function cubo ($num){
            return $num * $num * $num;
        }
        function cubo2 ($num){
            return $num ** 3;
        }
        function cubo3 ($num){
            return pow($num,3);
        }

        $z = 10;

        echo "<br>".cubo($z);
        echo "<br>".cubo2($z);
        echo "<br>".cubo3($z);


    ?>
    
</body>
</html>