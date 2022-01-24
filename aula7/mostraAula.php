<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href ="css/estilos.css"/>
 
    <title>Mostra dados aula </title>
</head>
<body  style="background-color: grey;">

<?php
    require_once ("connect.php");
    //SELECT nome,email,telefone,mensagem, genero
    $sql = "SELECT nome,email,telefone,mensagem, genero FROM contatos;";
    $res = mysqli_query($liga,$sql);


    //testar se há dados na tabela
    if (mysqli_num_rows($res) > 0 ){
        //mostrar dados da tabela
?>
     <table class="table table-striped table-hover ">
         <thead class="thead-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>       
                <th scope="col">Gênero</th>
                <th scope="col">Mensagem</th>
            </tr>
        </thead>
<?php
        while ($linha = mysqli_fetch_assoc($res)){
            // echo "<pre>";
            // echo $linha['nome'];
            // print_r($linha).PHP_EOL;
            // echo "</pre>";
            echo "<tr><th  scope='row'>".$linha['nome']."</th>";
            echo "<td>".$linha['email']."</td>";
            echo "<td>".$linha['telefone']."</td>";
            /*
            if ($linha['genero'] == 'F'){
                echo "<td> FEMININO </td>";
            } else {
                echo "<td> MASCULINO </td>";
            }
            */
            echo "<td>".($linha['genero'] == 'M' ? "Masculino" : "Feminino")."</td>";
            echo "<td>".$linha['mensagem']."</td></tr>";
        }

    } else {
        //não há registos na tabela
        echo "0 resultados...";
    }

?>

        
    </table>
    <div class="text-center">
        <a href="formularios2.php"><button type="button" class="btn btn-warning">Voltar</button></a>
    </div>

    <!-- ZONA DOS SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>

</html>