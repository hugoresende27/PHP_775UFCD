<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
<body>

<?php
        $turma = array( "PES1"=> array("nome" => "Pedro",
                                "sobrenome" => "Soares",
                                "idade" => "44",
                                "funcao" => "formador"),

                        "PES2"=> array("nome" => "hugo",
                                    "sobrenome" => "resende",
                                    "idade" => "33",
                                    "funcao" => "aluno"),

                        "PES3"=> array("nome" => "Zé",
                                    "sobrenome" => "Tó",
                                    "idade" => "55",
                                    "funcao" => "aluno"),
                        
                        "PES4"=> array("nome" => "Maria",
                                    "sobrenome" => "Manuela",
                                    "idade" => "25",
                                    "funcao" => "aluno"),
                        );
        
        echo "<pre>";
        print_r ($turma);
        echo "</pre>";

?>
    
</body>
</html>