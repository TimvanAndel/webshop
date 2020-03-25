<?php
include("../src/checklogin_customer.php");
include("../config/connect.php");
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Hoofdpagina Customers</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
    </head>
    <body>
        <div class="sidenav">
            <div class="login-main-text">
                <h2>Eigen Webshop<br> Login Page</h2>
                <form method="post">
                <input type="submit" value="Log Out" name="logout">
                </form>
            </div>
        </div>
        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div class="login-form">
                   <?php echo $_SESSION['email_customer'];?>
                </div>
            </div>
        </div>
       
    </body>
</html>
<?php
if(isset($_POST['logout'])){
    session_destroy();
    header("Location: login_customer.php");
}
?>