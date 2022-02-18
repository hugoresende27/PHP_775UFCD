<?php
session_start();



include_once("connect.php");

// var_dump($_POST);
// echo "ok";

    $nome = $_POST['user'];
    $pass = md5($_POST['password']);

    $sql = "SELECT * FROM utilizadores WHERE nome = '$nome' && password = '$pass'";

    $res = mysqli_query($liga, $sql);
    $num = mysqli_num_rows($res);
    
    if ($num == 1){
      
        //user autenticado
        $_SESSION['username'] = $nome;
        $sql = "SELECT nome FROM utilizadores WHERE nome = '$nome'";

        $res = mysqli_query($liga, $sql);
        echo $res;
        // header ('location: sucesso.php?user=ok');
    } else {
       //user falhou
        header ('location: login.php?user=ko');
        
    }




?>