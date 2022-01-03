<?php

function Gravar(string $texto, string $arquivo)
	{
		$fp=fopen($arquivo, "a+");
		fwrite($fp, "<br/> 	{$texto} \r\n");
		fclose($fp);
	}

?>