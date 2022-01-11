<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exc 1</title>
</head>
<body>

<p>Escreva uma função que faça a soma de dois números. Teste 2 vezes os valores a serem impressos no browser</p>

<label for="">num1</label>
<input type="number" name="num1" id="">
<label for="">num2</label>
<input type="number" name="num2" id="">
<input type="submit" value="calculo">

<?php 

    function soma ($num1,$num2){
        return $num1+$num2;
    }

    echo "<p>".soma(5,5);
    echo "<p>".soma(2,2);

    $a = 10;
    $b = 15;
    echo "<p>".soma($a,$b); 
    

?>
    
</body>
</html>