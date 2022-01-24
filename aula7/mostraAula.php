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
?>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>       
            <th>Gênero</th>
            <th>Mensagem</th>
        </tr>
    
<?php
        while ($linha = mysqli_fetch_assoc($res)){
            // echo "<pre>";
            // echo $linha['nome'];
            // print_r($linha).PHP_EOL;
            // echo "</pre>";
            echo "<tr><td>".$linha['nome']."</td>";
            echo "<td>".$linha['email']."</td>";
            echo "<td>".$linha['telefone']."</td>";
            echo "<td>".$linha['genero']."</td>";
            echo "<td>".$linha['mensagem']."</td></tr>";
        }

    } else {
        //não há registos na tabela
        echo "0 resultados...";
    }

?>

        
    </table>

        <a class ="negrito" href="formularios2.php">Voltar</a>
</body>

</html>