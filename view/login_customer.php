<?php
    include("../config/connect.php");
    include("../src/login_customer.php");

    if(!empty($_POST)){
        $chlogin = logIn();
    }
    
?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/favicon/apple.png">

    <title>Tim van Andel - Inloggen</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
   
  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              
              
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Tim van Andel - Webshop</strong>
        </a>
        
          
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Klanten Log in</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
<!-- __________________________________________ -->

            <form method="post" action="<?= BASEHREF;?>view/login_customer">
                <div class="form-group">
                <label>E-mailadres</label>
                <input type="text" class="form-control" name="field_email" placeholder="Email" required>
                </div>
                <div class="form-group">
                <label>Wachtwoord</label>
                <input type="password" class="form-control" name="field_password" placeholder="Wachtwoord" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="<?= BASEHREF;?>view/register_customer" class="btn btn-secondary">Registreer</a>
                <div class="form-group" id="message">
                
                </div>
            </form>




        </div>
      </div>

    </main>

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>