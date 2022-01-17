<?php
    //VERIFICAR SE COOKIE EXISTE
    if(!isset($_COOKIE['contadorVisitas'])){
        //ainda não existe cookie contadorVisitas
        setcookie("contadorVisitas",1, time()+ 60*60*24*30);
        $numVisitas = 1;
    } else {
        //se o cookie já existe, ler e incrementar o contadorVisitas
        $numVisitas = $_COOKIE['contadorVisitas']++;
        setcookie("contadorVisitas",$numVisitas, time()+ 60*60*24*30);
    }

    if(!isset($_COOKIE['nomeUser'])){
        //ainda não existe, definimos a var q vamos usar inicialmente
        $utilizador = "Visitante";
        setcookie("nomeUser","Hugo Resende",time()+60*60*24*30);
    } else {
        //cookie já existe
        $utilizador = $_COOKIE['nomeUser'];
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css"/>
    <title> Exemplo Cookies</title>
</head>
<body>

    <h1>aula de cookies</h1>

    <p>Olá bem vindo<span class="vermelho negrito"> <?php echo $utilizador  ?> </span> à página inicial </p>

    <p>Já visitou <?php echo $numVisitas ; ?> vezes as páginas deste site ! </p>

    <?php print_r($_COOKIE); ?>


<p>
    <a href="cookies2.php">Ligar a parte 2 </a> |
    <a href="sairCookies.php">Apagar os COOKIES </a>
</p>

    <h1>Fim da página Main</h1>
    
</body>
</html>