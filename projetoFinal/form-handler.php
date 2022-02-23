<?php

if($_POST){
    if(empty($_POST['nome']) || empty($_POST['mail']) || empty($_POST['sub']) || empty($_POST['msg']))
        header("location:contact.html");
    else{

            $name = $_POST['nome'];
            $visitor_email = $_POST['mail'];
            $subject = $_POST['sub'];
            $message = $_POST['msg'];

            //var_dump($_POST);

            $email_from = 'postmaster@pedrosoares.com';
            $email_subject = 'New Form Submission';
            $email_body = "User name: $name\n".
                        "User Email: $visitor_email\n".
                        "Subject: $subject\n".
                        "User Message: $message\n";

            $to = 'formacao@pedrosoares.com';

            $headers = "From: $email_from\r\n";
            $headers = "Reply-To: $visitor_email\r\n";

            mail($to, $email_subject, $email_body, $headers);
            var_dump($headers);
            // header("Location: contact.html");

        }
        // header("location:index.html");
    }
   

?>