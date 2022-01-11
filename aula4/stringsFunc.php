<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings funcoes</title>
</head>
<body>
    <?php

        $foo = 'hello world!';
        $foo = ucfirst($foo);             // Hello world!

        echo $foo;

        $bar = 'HELLO WORLD!';
        $bar1 = ucfirst($bar);             // HELLO WORLD!
        $bar2 = ucfirst(strtolower($bar)); // Hello world!

        echo $bar1;
        echo $bar2;

        function teste ($s){
            return ucfirst($s);
        }
        function teste2 ($s){
            return ucwords($s);
        }

        echo "<br>";
        echo teste("hugo resende");
        echo teste2("hugo resende");

    ?>
    
</body>
</html>