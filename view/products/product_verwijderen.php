<?php
include("../../src/checklogin_user.php");
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
        <a href="product_overzicht.php" class="navbar-brand d-flex align-items-center">
          <strong><svg class="bi bi-arrow-left-short" width="1em" height="1em" style="margin-top: 7px; position: absolute; margin-left: -20px;" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M7.854 4.646a.5.5 0 010 .708L5.207 8l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
          <path fill-rule="evenodd" d="M4.5 8a.5.5 0 01.5-.5h6.5a.5.5 0 010 1H5a.5.5 0 01-.5-.5z" clip-rule="evenodd" />
          </svg>Terug naar hoofdpagina</strong>
        </a>
            <strong style="color:white">Tim van Andel - Webshop</strong>
        
          
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
                <button type="submit" class="btn btn-danger" name="submit">Verweideren</button>
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