<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Aula 1 PHP</title>
    <link rel="stylesheet" href="css/estilos.css"/>
</head>
<body>
    
    <h2 class="negrito">BEM VINDO !!!! </h2>

    <div class="negrito">

<!-- 
    COMENTÁRIO 
-->
<?php 
//http://localhost/php_ufcd775/PHP_775UFCD/aula4/formTestGet.php?processa=sim

if (isset($_GET['processa'])){ 
    if ($_GET['processa']=="sim"){
        ?>

    <form action="ifselseIf.php" method="GET" class="p-5">
  
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" /  >

        <br>
        <br>

        <label for="morada">Morada: </label>
        <textarea name="morada" id="morada" cols="50" rows="3"></textarea>

        <br>
        <br>


        <label for="email">email: </label>
        <input type="email" name="email" id="email"/ >

        <br>
        <input type="submit" value="Enviar">
       
        
    </form>
    
<?php
        }}?>

    <a class="p-3" href="pag2.php?id=1">LINKAGEM</a>
            
    <?php 

        $nome = "Hugo";

        echo "<p class='p-3'>HELLO WORLD! ".$nome."</p>";

        echo "<p class='negrito vermelho p-3'>BEM VINDO AO MEU O'Braley \"SITE\"!</p>";   //"" e '' no interior  \ escape seq char


        
        //phpinfo();
        /*
        COMMENTS MULTI LINHAS
        */

    ?>


    </div>

</body>
</html>