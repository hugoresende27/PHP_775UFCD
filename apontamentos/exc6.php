<?php 


function salario ($sal)
{
	 return ($sal + (($sal / 100) * 5));
}
$sal = salario(1000);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>salario</title>
</head>
<body>
	
	<h1>	<?= $sal; ?> </h1>
	
</body>
</html>