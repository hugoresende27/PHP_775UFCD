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

    <form action="" method="POST" >
  
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" required="required"/  >

        <br>
        <br>

        <label for="morada">Morada: </label>
        <textarea name="morada" id="morada" cols="30" rows="10"></textarea>

        <br>
        <br>


        <label for="email">email: </label>
        <input type="email" name="email" id="email" required="required"/ >

        <br>
        <input type="submit" value="Enviar">
       
        
    </form>

    <a href="pag2.php?id=1">LINKAGEM</a>
            
    <?php 

        $nome = "Hugo";

        echo "<p>HELLO WORLD! </p>".$nome;

        //phpinfo();
        /*
        COMMENTS MULTI LINHAS
        */

    ?>


    </div>

</body>
</html>