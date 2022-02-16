
<?php

session_start();
// var_dump($_SESSION);

if(!isset($_SESSION['username'])) {
    header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="zxx" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Login And Registration</title>
    <link rel="stylesheet" href="styles2.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body style="color:green">


 <div class="container">
     <div class="card">

    <h1>WELCOME</h1>


    <h2 >Bem vindo Sr. <?= $_SESSION['username']  ?></h2>

    <a href="logout.php">Sair</a>


    </div>
    </div>

</body>

</html>