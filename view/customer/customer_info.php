<?php
// database connectie
include("../../config/connect.php");

session_start();
if(isset($_SESSION['loggedin_customer'] ) && $_SESSION['loggedin_customer'] == true){
  

} else {
  header("Location: ../../");
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Album example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
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
          

          <strong style="color: white;">Tim van Andel - Webshop</strong>
          <span>
          <a>

          
           
              <form method='post' style='float: left;'>
              <button type='submit' class='btn btn-primary' name='logout'>Log uit</button>
              </form>
              <?php
              if(isset($_POST['logout'])){
                session_destroy();
                header("Refresh:0");
              }
              ?>
          
         
             
            </a>
          </span>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Mijn Account</h1>
          
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
        <div class="row">
           
  
        </div>
      </div>
    </main>
    

  </body>
  <script src="https://kit.fontawesome.com/caef1a2785.js" crossorigin="anonymous"></script>

</html>

