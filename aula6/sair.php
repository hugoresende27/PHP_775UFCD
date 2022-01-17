
<?php

    session_start();

    unset($_SESSION['contador']);
    //session_destroy();

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

    <p>sessão apagada</p>
    <p>Já visitou <?php print_r($_SESSION); ?> vezes as páginas deste site ! </p>

    <p><a href="sessions.php">voltar para trás</a><br></p>


    
</body>
</html>