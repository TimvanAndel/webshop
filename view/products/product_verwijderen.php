<?php
include("../../config/connect.php");
include("../../src/products/product_verweideren.php");
$id = $_GET['del'];

$qry = $con->query("SELECT product.id AS product_id, product.name AS product_name, product.price AS product_price, category.category_name AS category_name,
product_image.image AS product_image
FROM product 
INNER JOIN product_image ON product.id = product_image.product_id 
INNER JOIN category ON product.category_id = category.id 
WHERE product.id= $id");
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
          
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Product Verweideren</h1>
            <strong>Weet u zeker dat u dit product wilt verweideren?</strong>    
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
  
    <!-- 
        name
        description
        category_id
        price
        color  
        weight
        active
     -->
    <?php 
    while ($product = $qry->fetch_assoc()){
    ?> 
    <div class="col-md-4" >
            <div class="card mb-4 shadow-sm" style="width:350px; float: center;">
          
            

              <img width="100%" height="225" src="<?= BASEHREF;?>assets/img/<?= $product['product_image'];?>" />
  
              </svg>
              <div class="card-body">
                <p class="card-text">Naam: <?= $product['product_name'];?></p>
                <small>Categorie: <?= $product['category_name'];?></small><br>
                <small id="total_places">Prijs: <?= $product['product_price'];?></small><br>
                 
                    
                <form method="POST">
                <button type="submit" class="btn btn-danger">Verweideren</button>
                </form>
                  <div class="btn-group">                   
                    
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

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>
<?php
}

if(isset($_POST['submit'])){
   
    $id = $_GET['del'];
    $qry = $con->query("DELETE FROM product WHERE id = $id");
    if($qry === false){   
        echo mysqli_error($con)." - ";
        exit(__LINE__);
    } else {
    echo "product verweiderd";
    header("Location: product_overzicht.php");
    }
}
?>


<!-- 
<center>
</center>
<br><br>
<div class="row">


          
           
   -->