<?php 

$salario =1576.76;
$valorAjuste=0;

function AjustarSalario($sal,&$valorAjuste)
{
	$valorAjuste = 300.00;

	return ($sal + $valorAjuste);
}

$valorFinal = AjustarSalario($salario, $valorAjuste);
echo "o valor ajustado é de {$valorFinal}</b>, com aumento de {$valorAjuste}</b>";

?>