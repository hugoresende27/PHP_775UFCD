<?php

$arrFrutas = ["ananas","maça","pera","kiwi","uva"];

foreach ($arrFrutas as $v)
{
	echo $v."<br/>";
}

$arrNomes = 
[
	1=>"Hugo",
	2=>"Celia",
	3=>"Afonso",
	4=>"Sara",
	5=>"Ze"
];

foreach ($arrNomes as $i)
{
	echo $i."<br/>";
}

foreach ($arrNomes as $chave => $i)
{
	echo "Numero:{$chave} = valor: {$i} <br/>";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array_Foreach</title>
</head>
<body>
	<ul>
		<?php
		foreach ($arrNomes as $valor)
		{
			?>
			<li><?= $valor ?></li>
			<?php
		}
		?>
	</ul>
	<table border="1">
		<td>
        <?php 
            $arrNotas =
            [
                "aluno1" => 
                [
                    "nome"=>"Hugo",
                    "nota"=>7
                ],

                "aluno2" => 
                [
                    "nome"=>"Lara",
                    "nota"=>4
                ],

                "aluno3" => 
                [
                    "nome"=>"Celia",
                    "nota"=>1
                ],

                "aluno4" =>
                [
                    "nome"=>"Afonso",
                    "nota"=>9
                ]

             ];
            foreach ($arrNotas as $aluno)
            {
                foreach ($aluno as $chave => $valor)
                {
                    echo "{$chave} = {$valor}<br>";
                }
                echo "<br>";
            }
        ?>
        
        </td>


	</table>
	
</body>
</html>