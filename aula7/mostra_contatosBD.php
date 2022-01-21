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
    
    <title>Formularios 1</title>
</head>
<body>

<?php
  include 'connect.php';
  $records = mysqli_query($liga,"select * from contatos"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['nome']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['telefone']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($liga); // Close connection ?>


?>

<a href="formularios2.php" class="botao">Voltar</a>

    
</body>
</html>