<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos</title>
</head>
<body>
    <?php
        //classe teste
        class teste{
            //funcao testar 
            function testar(){
                echo "<p>Em teste</p>";
            }
            function testar2(){
                echo "<h2>Olá Mundo !!!!!</h2>";
            }
           
        }

        function ola(){
            echo "<h1>OLA</h1>";
        }

        //Variáveis do tipo objeto:
        //instanciar o objeto teste com o nome de $x
        $x = new teste;
        //usar a funcao testar() no objeto $x->
        $x->testar();
        $x->testar2();
        ola();


    ?>
    
</body>
</html>