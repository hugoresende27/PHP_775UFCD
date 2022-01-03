<?php

for ($i=0; $i<10;$i++)
{
	echo $i."<br>";
}


for ($i=2; $i<=10;$i++)
{
	for ($j=1;$j<=10;$j++)
	{
	?>
	<li><?= $i; ?> X <?= $j; ?> são <?= ($j *$i); ?></li>
	<?php
	}
	echo "<br>"; 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>