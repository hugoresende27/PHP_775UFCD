<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();

//$_SESSION["key"] = date ("H:i:s");

//echo $_SESSION ["key"];

if (isset($_SESSION["key"]))
{
	echo "<br/>".$_SESSION["key"];
}

?>