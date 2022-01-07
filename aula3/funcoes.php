<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcoes</title>
</head>
<body>

<?php
    function dizOla($nome){
        echo "olá ".$nome;
    }

    $nome ="Hugo";
    dizOla($nome);

    function multi($a,$b=10){
        return $a*$b;
    }

    echo "<p>".multi(3)."</p>";
    echo "<p>".multi(4,4)."</p>";

    function soma2nums($a,$b){
        return $a + $b;
    }

    echo "<p>".soma2nums(15,soma2nums(3,6));

?>
    
</body>
</html>