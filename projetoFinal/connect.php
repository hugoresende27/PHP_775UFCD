

<?php

$servidor = "127.0.0.1";//localhost
$user = "root";
$pass = "";
$bd = "userregistration";

    //criar ligação
    $liga = mysqli_connect($servidor,$user, $pass, $bd);
    
//verificar a ligação
if (!$liga){
    die ("Erro na ligação à bd ".mysqli_connect_errno());
}
