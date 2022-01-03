<?php
$nome = "Hugo Emanuel Teixeira Resende";
$msg = "<h1>Bem Vindo</h1>";
echo substr($nome, 0,6);
echo "<br/>".strtoupper($nome);
echo "<br/>".strtolower($nome);
echo "<br/>".($msg);


$comida = "banana, maca, pera e uva";
$alt = str_replace("banana", "morango", $comida);

echo $comida;
echo "<br/>".$alt;

$ex = explode (" ",$nome);
echo "<br/>".$ex[1];  


if (strlen($nome)<=100)
{
	echo "valido";
}        
else 
{
	echo "Invalido";
}