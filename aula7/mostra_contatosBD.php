<?php
    //alguns servidores não têm definidos o EOL End of Line
    if (!defined("PHP_EOL")){
        define ("PHP_EOL", "\r\n");
    }

   

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8"  />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href ="css/estilos.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <title>Formularios 1</title>
</head>
<body>
<div class="main">
<div class="text-center">
  <h1>BASE DE DADOS</h1>
</div>
<?php
  include 'connect.php';
/*
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 */

  $records = mysqli_query($liga,"SELECT * FROM contatos"); // fetch data from database
?>
 <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Mensagem</th>
      <th scope="col">Gênero</th>
    </tr>
  </thead>
<?php
  while($infos = mysqli_fetch_array($records)){
?>
<tbody>
  <tr>
    <td><?=$infos['nome']  ?></td>
    <td><?=$infos['email']  ?></td>
    <td><?=$infos['telefone']  ?></td>
    <td><?=$infos['mensagem']  ?></td>
    <td><?=$infos['genero']  ?></td>
  </tr>	
</tbody>
  
<?php
}
?>
</table>

<?php mysqli_close($liga); // Close connection ?>


<div class="text-center">
<a href="index.php"> <button type="button" class="btn btn-warning">Voltar</button></a>
</div>

</div>
</body>
</html>