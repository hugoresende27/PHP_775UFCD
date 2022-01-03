<?php 

include ("gravar.php");
Gravar("Include", "file.txt");

include ("ler.php");
$texto = Leitura("file.txt");
echo $texto;

echo "<br><h1>Teste<br/></h1>"


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Requisitando</title>
</head>
<body>
	<h1>
		<?php
		echo Leitura("File.txt");
		?>
	</h1>
	
</body>
</html>