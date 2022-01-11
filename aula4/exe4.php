<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css"/>
    <title>Exc 4</title>
</head>
<body>

<?php

    function multi($num1,$num2){
        return $num1*$num2;
    }

    //?val1=10&val2=11

    //if ((isset($_GET['val1'])) && (isset($_GET['val2']))){
    if (!empty($_GET['val1']) && (!empty($_GET['val2']))){

        $num1 = $_GET['val1'];
        $num2 = $_GET['val2'];
        $res = multi($num1,$num2);

        echo "<br>RESULTADO:: ".$res;
        if ($res>100){
            $dif =  $res-100;
            echo "<p>A multipicação entre ". $num1 ." e ". $num2." é MAIOR DO QUE 100!<p>DIF:: $dif";
        } elseif  ($res<100){
            $dif = 100 - $res;
            echo "<p>A multipicação entre ". $num1 ." e ". $num2." é MENOR DO QUE 100!<p>DIF:: $dif";
        }else {
            echo "<p>A multipicação entre ". $num1 ." e ". $num2." é IGUAL DO QUE 100!";
        }

    } else {
        echo "VAZIO";
    }
    


?>

<a href="formMulti.php">Form multi</a>
    
</body>
</html>