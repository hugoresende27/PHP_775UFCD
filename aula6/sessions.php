<?php

    //sessões servem para guardar info do user

    session_start();    //INICIAR A SESSÃO
    if (!isset($_SESSION['contador'])){//se sessão não existir
       $_SESSION['contador'] = 1;
    } else {
        $_SESSION['contador']++;
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Sessões</title>
</head>
<body>

<p>Olá bem vindo à página de sessões</p>
<p>Já visitou <?php echo $_SESSION['contador'] ; ?> vezes as páginas deste site ! </p>

<?php print_r($_SESSION); ?>

<a href="sessions2.php">Ligar a sessão parte 2</a><br>
<a href="sair.php">Apagar a sessão</a>

    
</body>
</html>