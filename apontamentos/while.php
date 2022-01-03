<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>While</title>
</head>
<body>

	<ul>
		<?php
		$cont=0;
		while ($cont<20) 
		{
			echo "Contagem:: {$cont} <br>";
			$cont++;
		}



		?>
	</ul>
	<ul>
		<?php
		$cont=0;
		while ($cont<75) 
		{			
			if ($cont>50 && $cont <=60) 

				{
					?>
					<li><?= $cont; ?></li>
					<?php
				}
			$cont++;
		}
		?>

	
</body>
</html>