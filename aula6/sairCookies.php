
<?php



setcookie("nomeUser","",time()-60*60*24*30);
setcookie("contadorVisitas","",time()-60*60*24*30);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/estilos.css">
<title>Cookies apagar</title>
</head>
<body>

<p>cookies apagados</p>
<p>Print_r cookies <?php print_r($_COOKIE); ?>  </p>

<p><a href="cookies.php">voltar para trás</a><br></p>



</body>
</html>