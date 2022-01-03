<?php


	
	function Ola($nome,$email)
	{
		return "Olá o meu nome é {$nome} e o mail é {$email}!!";
	}

	$v= ola("Hugo","hr272@gmail.com");
	echo $v;


	

	function Ajuste($n1,$n2)
	{
		return (($n1*$n2)/4);
	}

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Functions</title>
</head>
<

	<h1><?= Ajuste(2,5); ?></h1>

	<ul>
		<?php 
			for ($i=0;$i<10;$i++)
			{
				for($j=0;$j<10;$j++)
				{
					?>
					<li><?= Ajuste($i, $j) ?></li>
					<?php

				}
				
			}
		?>
	</ul>
	
</body>
</html>