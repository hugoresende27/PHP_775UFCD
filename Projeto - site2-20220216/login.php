<!DOCTYPE html>
<html lang="zxx" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Login And Registration</title>
    <link rel="stylesheet" href="styles2.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="login-box">
            <div class="row">

                <div class="col-md-6 login-left">
                    <h2> Login Here </h2>
                    <form action="validation.php" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required="required" />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required="required" />
                        </div>
                        <button type="submit" class="btn btn-primary"> Login </button>
                    </form>
                    
                <?php 
                        if (isset($_GET['user'])){
                            if($_GET['user']== 'ko')
                            {
                                echo "<h3 style='color:red'>Falharam as credenciais</h3>";
                            } 
                         
                        }


                    ?>
                </div>

                
      

                <div class="col-md-6 login-right">


                    <h2> Register Here </h2>
                    <form action="registration.php" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required="required" />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required="required" />
                        </div>
                        <button type="submit" class="btn btn-primary"> Register </button>
                    </form>

                    <?php 
                        if (isset($_GET['newuser'])){
                            if($_GET['newuser']== 'ok')
                            {
                                echo "<h3>User registado com sucesso!</h3>";
                            } 
                            if($_GET['newuser']== 'ko') 
                            {
                                echo "<h3 style='color:red;'>User Já existe </h3>";
                            }
                        }


                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>