<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Var SERVER</title>
</head>
<body>
    <?php

//https://www.php.net/manual/en/reserved.variables.server.php
//VARS SUPERGLOBAIS $_SERVER

        echo $_SERVER['SERVER_ADDR']."<br>";    //http://127.0.0.1/  1
        echo $_SERVER['SERVER_PORT']."<br>";    //80
        echo $_SERVER['SERVER_NAME']."<br>";    //localhost
        echo $_SERVER['REMOTE_ADDR']."<br>";    //1
        echo $_SERVER['DOCUMENT_ROOT']."<br>";    //C:/xampp/htdocs
        echo $_SERVER['SERVER_SOFTWARE']."<br>";    //Apache/2.4.47 (Win64) OpenSSL/1.1.1k PHP/8.0.5

       

    ?>
    
</body>
</html>