<?php
for ($i=0;$i<10;$i++)
{
	echo "<br/>Indice {$i}";
}

$w=0;
do
{
	echo "<br/>".$w;
	$w++;

}while ($w<6);
$index = 1;
$mostrou = false;

do {
    if (!$mostrou) {
        echo $index;
        $mostrou = !$mostrou;
    }
    $index++;
} while ($index < 6);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercicios Parte 2</title>
</head>
<body>
	<ul>
		<?php
		for ($i=0;$i<=20;$i++)
			{
				?>
				<li><?= $i ?> X 30 = <?= $i * 30 ?></li>
				<?php
			}

		?>
	</ul>

	<div>
		<?php 
		$w=0;
			do
			{
				if ($w==2 || $w==6|| $w==10)
				{
					?>
					<div style="background:DodgerBlue "><?= $w ?></div>
					<?php
				}else
				{

				?>
				<div><?= $w ?></div>
				<?php
				
			}$w++;

			}while ($w<13);

		?>

	</div>


	
</body>
</html>