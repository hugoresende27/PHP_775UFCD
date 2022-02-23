<?php
include_once 'connect.php';
require 'funcoes.php';
session_start();

if($_POST){
 
    //limpar vars
    $name = $email =  $message =  "";
    //mensagem de erro caso vazio
    $erro_nome = $erro_mail =  $erro_mensagem =  "";

    //verificar se nome está vazio/////////////////////////////////////////////////////////////
    if (empty($_POST['name'])){
        $erro = "You forget your name";
        $ha_erros = true;
    } else {
        $nome = seguranca_dados($_POST['name']);
        //verificar se nome tem caracteres não permitidos
       // if (!preg_match("/^[a-zA-Z ]*$/", $nome)){       // regex usado aqui, /^[chars]$/
        if (!preg_match("/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/", $nome)){       
            $erro = "Invalid !!";
            $ha_erros = true;
        }
    } 
    //verificar se email está vazio/////////////////////////////////////////////////////////////
    if (empty($_POST['email'])){
        $erro = "You forget your email";
        $ha_erros = true;
    } 
    //verificar se email tem caracteres não permitidos
    elseif (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $_POST['email'])){  // regex usado aqui
            $erro = "Invalid Email";
            $ha_erros = true;
        }
    else {
        $mail = seguranca_dados(($_POST['email']));
    }
    //verificar se mensagem está vazia/////////////////////////////////////////////////////////////
    if (empty($_POST['message'])){
        $erro = "We need a message...";
        $ha_erros = true;
    }  
    else {
        $mensagem = seguranca_dados(($_POST['mensagem']));
    }

    if (!isset($ha_erros)){
    
    

        $nome = $_POST['name'];
        $email = $_POST['email'];

        $message = $_POST['message'];
        date_default_timezone_set("Europe/Lisbon");
        $date = date('Y-m-d H:i:s');
        $sql = "INSERT INTO contacts (name, email,message,date) VALUES ('$nome', '$email','$message','$date')";
            

        if (mysqli_query($liga, $sql)) 
        {

            $name = $_POST['name'];
            $visitor_email = $_POST['email'];
            $subject = "assunto";
            $msg = $_POST['message'];

            $email_from = 'demo@demo.com';
            $email_subject = 'New  Submission';
            $email_body = "User name: $name\n".
                        "User Email: $visitor_email\n".
                        "Subject: $subject\n".
                        "User Message: $msg\n";

            $to = 'demo@demo.com';

            $headers = "From: $email_from\r\n";
            $headers = "Reply-To: $visitor_email\r\n";

            // ini_set("SMTP","smtp.example.com" );
            // ini_set('sendmail_from', 'user@example.com');
            
            
            if(mail($to, $email_subject, $email_body, $headers)) 
            {
                $resMail = "MAIL OK";
            } else {
                $resMail ="MAIL FAIL";
            }

            $resBD = "BD OK";
            $res = $resBD."  ".$resMail;
            $_SESSION['res']=$res;
            header('location:index.php');

        } 
        else
        {
            echo "Error  " . mysqli_error($liga);
        }
    
        }    else{
            $_SESSION['res']=$erro;
            header('location:index.php');
        }
          
    }

       

mysqli_close($liga);
?>