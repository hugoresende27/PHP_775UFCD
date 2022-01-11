<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões</title>
</head>
<body>
    <?php
        $a = 10;
        $b = $c = 2;
        $d = $c +$b;
        $e = 10 + $d + ($c*$b);
        $e++;
        $f = $e;
        echo $f;

        $x = 20;
        $z = "20";

        //echo $x++;
        //echo $x;
        echo "<br>";
        print ($x === $z ? "IGUAL":"DIFERENTE");        //tipo de dados e valor igual
        echo "<br>";
        print ($x == $z ? "IGUAL":"DIFERENTE");         //valor igual, tipo de dados não interessa

        $a += 5;
        echo "<br>".$a;
        $a *= 5;
        echo "<br>".$a;
        $a -= 5;
        echo "<br>".$a;

        $k = "ola";
        $k .= "mundo ....";
        $k .= " quem ";
        echo "<br>".$k;
    ?>
    
</body>
</html>