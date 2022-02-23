<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Teste Final</title>
</head>
<body>
  

<section class="header">
    <div class="contact-title">
        <h1>Say Hello</h1>
        <h2>We are always ready to serve you!</h2>
    </div>
   

    <div class="contact-form">
        <form action="process.php" id="contact-form" method="post">

        <?php
          session_start();
          // if (isset($_GET['res']))
          if (isset($_SESSION['res']))
          {
            echo "
              <div>
                <h3  id='hideMe' class='msg'>". $_SESSION['res']."</h3>
              </div>";   
            session_destroy();
           
          }
       
        ?>


            <input type="text" name="name" class="form-control" placeholder="Your Name" required="required">
            <br>
            <input type="text" name="email" class="form-control" placeholder="Your email" required="required">
            <br>
            <textarea name="message" rows="4" class="form-control" placeholder="Message" required="required"></textarea>
            <br>
            <input type="submit" class="form-control submit" value="SEND">
        </form>
    </div>
</section>


</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>