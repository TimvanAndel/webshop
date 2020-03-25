<?php
include("../../config/connect.php");

$qry = $con->query("SELECT * FROM product");
if($qry === false){   
	echo mysqli_error($con)." - ";
	exit(__LINE__);
} else {
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
          <a href="<?= BASEHREF;?>view/index_user.php" class="navbar-brand d-flex align-items-center">
          <strong><svg class="bi bi-arrow-left-short" width="1em" height="1em" style="margin-top: 7px; position: absolute; margin-left: -20px;" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M7.854 4.646a.5.5 0 010 .708L5.207 8l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M4.5 8a.5.5 0 01.5-.5h6.5a.5.5 0 010 1H5a.5.5 0 01-.5-.5z" clip-rule="evenodd" />
</svg>Terug naar hoofdpagina</strong>
          </a>

          <strong style="color: white;">Tim van Andel - Webshop</strong>
          
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Producten</h1>
          <a href="product_toevoegen.php" class="btn  btn-primary">Product Toevoegen</a><br>
          <small>Ik heb nog problemen met de fotos en de groote van de elemeneten daardoor</small>
          
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
        <div class="row">
<?php 
while ($product = $qry->fetch_assoc()){
$qry2 = $con->query("SELECT * FROM product_image WHERE id=" . $product['id'] . ""); 
while ($product_image = $qry2->fetch_assoc()){

?>

          
          <div class="col-md-4" style="float: left;">
            <div class="card mb-4 shadow-sm">
         
            

              <img width="100%" height="225" src="<?= BASEHREF;?>assets/img/<?= $product_image['image'];?>" />
  
              </svg>
              <div class="card-body">
                <p class="card-text">Naam Product: <?= $product['name'];?></p>
                <small id="total_places">Prijs: <?= $product['price'];?></small><br>
                  <?= '<a href="product_wijzigen.php?id='.$product['id'].'" class="btn btn-sm btn-outline-primary">Product wijzigen</a>'; ?>
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
}
$qry->close();
?>
