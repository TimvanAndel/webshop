<?php
    include("../config/connect.php");
    include("../src/login_customer.php");

    if(!empty($_POST)){
        $chlogin = logIn();
    }

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Login Users</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
    </head>
    <body>
        <div class="sidenav">
            <div class="login-main-text">
                <h2>Webshop - Tim van Andel<br> Login voor customers</h2>
            </div>
        </div>
        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div class="login-form">
                   <form method="post" action="<?= BASEHREF;?>view/login_customer.php">
                      <div class="form-group">
                         <label>E-mail adres</label>
                         <input type="text" class="form-control" name="field_email" placeholder="Email" required>
                      </div>
                      <div class="form-group">
                         <label>Wachtwoord</label>
                         <input type="password" class="form-control" name="field_password" placeholder="Password" required>
                      </div>
                      
                      <button type="submit" class="btn btn-black">Login</button>
                      <a href="<?= BASEHREF;?>view/register_customer.php" class="btn btn-secondary">Registreer</a>
                      <div class="form-group" id="message">
                        
                      </div>
                   </form>
                </div>
            </div>
        </div>
       
    </body>
</html>