<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="css/estilos.css"/>
    <title>Mostra dados aula </title>
</head>
<body>

<?php
    require_once ("connect.php");
    //SELECT nome,email,telefone,mensagem, genero
    $sql = "SELECT nome,email,telefone,mensagem, genero FROM contatos;";
    $res = mysqli_query($liga,$sql);


    //testar se há dados na tabela
    if (mysqli_num_rows($res) > 0 ){
        //mostrar dados da tabela
        while ($linha = mysqli_fetch_assoc($res)){
            echo "<pre>";
            echo $linha['nome'];
            print_r($linha).PHP_EOL;
            echo "</pre>";
        }

    } else {
        //não há registos na tabela
        echo "0 resultados...";
    }


?>
        <a class ="negrito" href="formularios2.php">Voltar</a>
</body>
</html>