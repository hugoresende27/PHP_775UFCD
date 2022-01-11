<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css"/>
    <title>If ELseif Else</title>
</head>
<body>
    <?php

/*
        if (isset($_GET['nome'])){
            echo "<p class='negrito'>O seu nome é :" . $_GET['nome']. "</p>";}
        elseif (isset($_GET['morada'])){
            echo "<p class='negrito'>O seu morada é :" . $_GET['morada']. "</p>";}
        elseif (isset($_GET['email'])){
            echo "<p class='negrito'>O seu email é :" . $_GET['email']. "</p>";}
         else {
            echo "<p>BEM vindo visitante!";
        }
*/

        if (!empty($_GET['nome'])){
            echo "<p class='negrito'>O seu nome é :" . $_GET['nome']. "</p>";}
        elseif (!empty($_GET['morada'])){
            echo "<p class='negrito'>O seu morada é :" . $_GET['morada']. "</p>";}
        elseif (!empty($_GET['email'])){
            echo "<p class='negrito'>O seu email é :" . $_GET['email']. "</p>";}
         else {
            echo "<p>BEM vindo visitante!";
        }
        //$nome = $_GET['nome'];
        //$apelido = $_GET['apelido'];

        //http://localhost/php_ufcd775/PHP_775UFCD/aula4/ifselseIf.php?nome=Hugo&apelido=Resende
        //echo "<p class='negrito'>O seu nome é : $nome";
        //echo "<p class='negrito'>O seu nome é : $apelido";

        //echo $nome;
        print_r($_GET);


    ?>
    
</body>
</html>