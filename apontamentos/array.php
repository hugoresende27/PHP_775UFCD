<?php 

$arrayNome = array("Hugo", "Bruna", "Celia", "Sara", "Afonso","Maria","Cassandra","Julia");
$arrayNome2 = ["Hugo", "Bruna", "Celia", "Sara", "Afonso"];
echo "{$arrayNome[0]}";
echo "<br>{$arrayNome2[4]}";

for ($i=0; $i<count($arrayNome);$i++)
{
	echo "<br/>".$arrayNome[$i];
}
echo "<br/>".count ($arrayNome);
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array</title>
</head>
<body>
	<select >
		<?php
		for ($i = 0; $i < count($arrayNome);$i++)
		{
			?>
			<option value="<?= $i; ?>"><?= $arrayNome[$i]; ?></option>
			<?php
		}
		?>
		
	</select>

<table border="1">
<td>
	<?php

	$arrayNotas = array 
	(
		"aluno1"=> array
		(
			"nome"=>"Hugo",
			"nota"=>20
		)
	);
echo $arrayNotas["aluno1"]["nota"];

	?>

</td>
<td>
	<?php

	$arr =[];

	for ($i=0; $i<50;$i++)
		{
			$arr[]=$i;
		}
	for ($i=0;$i<50;$i++)
		{
			echo "17 X {$i} = ". (17*$arr[$i])."<br/>";
		}
	?>

</td>
</table>
	
</body>
</html>