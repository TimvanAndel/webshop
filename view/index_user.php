<?php
include("../src/checklogin_user.php");
include("../config/connect.php");
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
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
        <form method="post">
            <button type="submit" class="btn btn-primary" name="logout">Log uit</button>
        </form>
          
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">User paneel</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
        <div class="row">
<!-- __________________________________________ -->

          <div class="col-md-4" style="float: left;">
            <div class="card mb-4 shadow-sm" >
              <div class="card-body"> 
                <strong class="card-text" style="font-size: larger;">Producten</strong>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">   

                    <form action="products/product_overzicht.php">
                      
                      <small style="font-size: large">producten toevoegen, wijzigen of verweideren</small><br>
                      <button type="submit" class="btn btn-primary">Ga naar producten</button>
                    </form>        
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="col-md-4" style="float: left;">
            <div class="card mb-4 shadow-sm" >
              <div class="card-body"> 
                <strong class="card-text" style="font-size: larger;">Catogorieën</strong>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">   

                    <form action="category/category_overzicht.php">
                      
                      <small style="font-size: large">Catogorieën toevoegen, wijzigen of verweideren</small><br>
                      <button type="submit" class="btn btn-primary">Ga naar Catogorieën</button>
                    </form>        
                  </div>
                </div>
              </div>
            </div>
          </div>




          <div class="col-md-4" style="float: left;">
            <div class="card mb-4 shadow-sm" >
              <div class="card-body"> 
                <strong class="card-text" style="font-size: larger;">Klanten</strong>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">   

                    <form action="category/category_overzicht.php">
                      
                      <small style="font-size: large">Klanten toevoegen, wijzigen of verweideren</small><br>
                      <button type="submit" class="btn btn-primary">Ga naar Klanten</button>
                    </form>        
                  </div>
                </div>
              </div>
            </div>
          </div>




        </div>
        </div>
      </div>

    </main>

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>
<?php
if(isset($_POST['logout'])){
    session_destroy();
    header("Location: ../index.php");
}
?>
