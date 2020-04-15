<?php
include("../../config/connect.php");
session_start();

// var_dump($_SESSION['cart']);

$whereIn = implode(',', $_SESSION['cart']['id']);



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
          

          <strong style="color: white;">Tim van Andel - Webshop</strong>
          
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Winkelmand</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
        <div class="row">
           
<?php 

$qry = $con->query("SELECT * FROM product WHERE id IN ($whereIn)");


if($qry === false){   
	echo mysqli_error($con)." - ";
	exit(__LINE__);
} else {

while ($product = $qry->fetch_assoc()){
?> 
          <div class="col-md-4" style="float: left;">
            <div class="card mb-4 shadow-sm">
            
            

              <img width="100%" height="225" src="<?= BASEHREF;?>assets/img/<?= $product['product_image'];?>" />
  
              </svg>
              <div class="card-body">
                <p class="card-text">Naam: <?= $product['name'];?></p>
                <small id="total_places">Prijs: <?= $product['product_price'];?></small><br>
                  
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">                   
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php
}
?>  
        </div>
      </div>
    </main>
  </body>
</html>
<?php
}
?>