<?php

	date_default_timezone_set('America/Sao_Paulo');
	echo date("D/M/Y");
	echo "<br/>".date("d/m/y");
	echo "<br/>".date("H::i::s")."<br/>";

	$hora =date("H");
	echo $hora."<br/>";

	if ($hora >0 && $hora <=5)
	{
		echo "Boa madrugada!!";
	}

	elseif ($hora >5 && $hora <=12)
	{
		echo "Bom dia!!";
	}

	elseif ($hora >12 && $hora <=20)
	{
		echo "Boa tarde!!";
	}
	else
	{
		echo "boa Noite!";
	}


	
	function Gravar(string $texto, string $arquivo)
	{
		$fp=fopen($arquivo, "a+");
		fwrite($fp, "<br/> 	{$texto} \r\n");
		fclose($fp);
	}

	Gravar(date("d/m/Y H:i:s"),"file.txt");


	function Leitura(string $arquivo)
	{
		$fp=fopen($arquivo,"r");
		$texto=fread($fp,filesize($arquivo));
		fclose($fp);
		return $texto;
	}

	echo Leitura("file.txt");
?>