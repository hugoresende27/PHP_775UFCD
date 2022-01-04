<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Variávies</title>
    <link rel="stylesheet" href="css/estilos.css"/>
</head>
<body>
<div class="container m-4">
    <?php

        $nome = "Hugo";  //php ajusta a var ao tipo de dados, string, int etc
        $idade = 33;

        echo ("<div class='p-3'>O ". $nome." tem ".$idade." anos </div>");
        //span é usado para formatar apenas uma parte do texto
        echo ("<div class='m-3'>O <span class='negrito'>$nome</span> tem <span class='vermelho'>$idade</span> anos </div>");
        echo ' O $nome tem $idade anos';

        $b1 = true;
        $b2 = false;
        $b3 = 5;
        $b4 = (bool)$b3;


        echo "<p><li>ECHO b1 true :: $b1</p>";
        echo "<p><li>ECHO b2 false::  $b2</p>";
        echo "<p><li>ECHO b3 ::  $b3</p>";
        echo "<p><li>ECHO b4 cast bool::  $b4</p>";

        $c1 = 1.2E6;    //1200 000
        echo "<p><li>ECHO c1 ::  $c1</p>";

        $nome2 = "hugo resende";
        echo "<p> PRIMEIRA LETRA :: $nome2[0] </p>";
        echo "tamanho da str->".strlen($nome2);
        echo "<p> ULTIMA LETRA :: ".$nome2[strlen($nome2)-1]." </p>";

        //VETORES CHAVE :: INTEIRO/STRING   VALOR :: QUALQUER COISA
        $e = array(100 => 'teste1',
                   200 => 'teste2',
                   300 => 'teste3',
                   400 => 'teste4');

        $e[200] = 50;
        $e[2] = 50;
        $e[500] = "Criar novo elemento";
        unset($e[400]); //unset elimina a chave 400


        echo "<pre>";
        print_r ($e);
        echo "</pre>";

        echo "<p> chave 200 -> <span class='vermelho'>$e[200] </span> </p>";


        $n = "Hugo";
        $a = "Resende";
        $i = 33;
        $arrayVazio = array();
        $arrayVazio[1] = $n;
        $arrayVazio[2] = $a;
        $arrayVazio[3] = $i;
        echo "<pre>";
        print_r ($arrayVazio);
        echo "</pre>";

        //VETOR ASSOCIATIVO --> dar nomes às chaves dos vetores
        $clubes = array();
        $clubes['nome'] = "SL BENFICA";
        $clubes['cidade'] = "Lisboa";
        $clubes['cor'] = "Vermelho";

        echo "<pre>";
        print_r ($clubes);
        echo "</pre>";

        echo "<p> O melhor clube do mundo é o <span class='vermelho'>".$clubes['nome']."</span>";

        //VETORES MULTIDIMENSIONAIS
        $clubes2 = array( 1=> array("clube" => "benfica",
                                    "cidade" => "lisboa",
                                    "cor" => "vermelho"),

                          2=> array ("clube" =>"naval",
                                     "cidade" => "figueira",
                                     "cor" => "verde"),

                          3=> array ("clube" =>"porto",
                                    "cidade" => "porto",
                                    "cor" => "azul")
                    );

        echo "<pre>";
        print_r ($clubes2);
        echo "</pre>";

        echo $clubes2[2]['cor'];
                            
    ?>
    </div>
    
</body>
</html>