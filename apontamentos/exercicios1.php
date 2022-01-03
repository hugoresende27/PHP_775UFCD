<?php
echo "::::exc1:::<br/>";
echo "Olá, eu estou aprendendo php!";

echo "<br/><br/>::::exc2:::<br/>";
$nome ="Hugo";
$salario = 3720;
echo "{$nome} e {$salario}";

echo "<br/><br/>::::exc3:::<br/>";
$a=1200+450.78;
echo $a;

$b= 87+45;
$c= $b *3;
echo "87 + 45 = {$b} e ainda X 3 = {$c}";
echo "<br/>".(87+45)*3;

$d= 100-50;
$f= $d/100;
echo "<br/>".$f;

echo "<br/><br/>::::exc4:::<br/>";
$nome ="Hugo";
$idade = 12;
if ($idade>=18)
	{
		echo "Olá {$nome}, estás dentro";
	}
else
{
	echo "{$nome} Acesso negado!<br/><br/>";
}

$sal = 1400;
$ajuste = 300;

if ($sal<1200)
{
	$sal = $sal+ $ajuste;
	echo $sal;
}
elseif ($sal>1200 && $sal<1600)
{
	$sal = $sal + 250;
	echo $sal;
}
elseif ($sal>1600) 
{
	$sal = $sal + 200;
	echo $sal;
}

echo "<br/><br/>::::exc5:::<br/>";
$dia = 1;

switch ($dia)
{
    case 1:
        echo "domingo";
        break;
        
    case 2:
        echo "segunda";
        break;
        
    case 3:
        echo "terça";
        break;
        
    case 4:
        echo "quarta";
        break;

    default:
        echo "dia não encontrado";
        break;
}

echo "<br/><br/>::::exc6:::<br/>";
$indice1 =0;

while ($indice1 <20)
{
	echo "<br/>".$indice1;
	$indice1++;
}


$indice =0;
while ($indice <=15)
{
	echo "<br/>".$indice;
	$indice++;
	if ($indice == 12)
	{
		echo "Numero válido, posição {$indice}";
	}
}
?>