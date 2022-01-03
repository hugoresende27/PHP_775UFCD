<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercicio Array</title>
</head>
<body>
	<?php
		$frutas = ["Uva","kiwi","maca","Pera","ananas"];

		?>
		<select name="frutas">
			<?php
				for ($i=0;$i<count($frutas);$i++)
				{
					?>
					<option> <?= $frutas[$i];?> </option>
            <?php 
        		} 
        		?>
    </select>
				<?php
		$pc = ["Mouse","teclado","monitor","gabinete","establizador","caixa de som"];

		?>
		<select name="pc">
			<?php
				for ($i=0;$i<count($pc);$i++)
				{
					?>
						<option> <?= $pc[$i];?> </option>
						<?php
        		} 

        	?>
    	</select>
    	<ul>
    	<?php
    	foreach ($pc as $i)
        		{
        			?>
        			
        			<li> <?= $i ?> </li>
        			
        			<?php
        		}
        ?>
    </ul>

	
</body>
</html>