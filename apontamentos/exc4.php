<?php

	$frutas = array 
	(
		1=>"uva",
		2=>"banana",
		3=>"abacaxi",
		4=>"maca",
		5=>"pera"
	);


	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Frutasarray</title>
	</head>
	<body>
		<select>
		<?php
		foreach ($frutas as $i => $v)
		{
			?>
			  <option value="<?=$i;?>"><?= $v; ?></option>
			<?php
		}
		?>
		</select>
	</body>
	</html>