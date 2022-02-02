<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleM2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">   <title>User Login and Registration</title>
</head>
<body>

    <div class="container">

        <div class="login-box">

            <div class="row">

                <div class="col-md-6 login-left">
                    <h2>Login Here</h2>
                    <form action="validation.php" method="POST">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" required="require" name="" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" required="require" name="" id="">
                        </div>
                        <div class="centrar">
                            <button type="submit" class="btn btn-danger">Login</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 login-right">
                    <h2>Register Here</h2>
                    <form action="registration.php" method="POST">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" required="require" name="" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" required="require" name="" id="">
                        </div>
                        <div class="centrar">
                            <button type="submit" class="btn btn-danger">Register</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>
</html>