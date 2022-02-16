<?php
session_start();



include_once("connect.php");

// var_dump($_POST);
// echo "ok";

    $nome = $_POST['user'];
    $pass = md5($_POST['password']);

    $sql = "SELECT * FROM utilizadores WHERE nome = '$nome'";

    $res = mysqli_query($liga, $sql);
    $num = mysqli_num_rows($res);
    
    if ($num == 1){
        // echo "Utilizador já existe! ";
        header ('location: login.php?newuser=ko');
    } else {
        $sql = "INSERT INTO utilizadores (nome,password) VALUES ('$nome','$pass');";
        $res = mysqli_query($liga, $sql);
        header ('location: login.php?newuser=ok');
        // echo "Utilizador '$nome' registado!";
    }




?>