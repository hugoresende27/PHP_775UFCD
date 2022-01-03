<?php

function soma ($a, $b)
{
	return $a + $b;
}

echo soma(10,15);
//echo "{$a} + {$b} = "
function Soma1(){
    echo (3 + 6);
}

Soma1();

function mult ($a, $b)
{
	return $a * $b;
}
echo "<br/>".mult (10,15);

$arr = ["uva","pera","maca"];

function ler ($arr)
{
	for ($i=0; $i<count($arr);$i++)
	{
		 echo $arr[$i];
	}
}

ler($arr);
