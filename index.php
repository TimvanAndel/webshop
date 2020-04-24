<?php
// database connectie
include("config/connect.php");

session_start();
  $qry_category = $con->query("SELECT * FROM category");
  
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/favicon/apple.png">

    <title>Tim van Andel</title>

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
          <?php if(isset($_SESSION['loggedin_customer'] ) && $_SESSION['loggedin_customer'] == true){
            echo"<a href='view/customer/customer_info' style='float: left; margin-right: 20px;'><button class='btn btn-info'>Mijn Account</button></a>
          
              <form method='post' style='float: left;'>
              <button type='submit' class='btn btn-primary' name='logout'>Log uit</button>
              </form>";
              if(isset($_POST['logout'])){
                session_destroy();
                header("Refresh:0");
              }
          } else {
            echo"<a href='view/login_customer' style='text-decoration: none; color: white;margin-top: -5px;'><strong>Login</strong></a>";
          }
          ?>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="view/cart/winkelmand" style="text-decoration: none; color: white;float: right;">
              <i class="fas fa-shopping-basket fa-2x"></i>
            </a>
          </span>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Producten</h1>
          <form method="GET" style="left: 50%; margin-left: 285px;">

            <select name="filter" class="form-control" style="width: 200px; float: left;">
            <option value="">Filter</option>
            <option value="l-h">Prijs Laag - Hoog</option>
            <option value="h-l">Prijs Hoog - Laag</option>
            
            </select>

            <select name="fCategory" id="fCategory" class="form-control" style="width: 200px; float: left;">
              <option value="">Kies een catogorie</option>
              <?php while($category = $qry_category->fetch_assoc()){
                echo "<option value=" . $category['category_name'] . ">" .  $category['category_name'] . "</option>";
              }
              ?>
            
            
            </select>
          
          <input type="submit" value="Filters Toepassen" class="btn btn-primary" style="float: left; width: 170px">
          </form>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
        <div class="row">
           
<?php 
  $fqry = "";
  $f1qry = "";

  

  if(isset($_GET['fCategory']) && $_GET['fCategory'] != ""){

    $fCategory = $_GET['fCategory'];
    $fqry .= "AND category_name = '$fCategory'";

  } 
  if(isset($_GET['filter']) && $_GET['filter'] != ""){
    $filter = $_GET['filter'];
    if($filter == "h-l"){
      $f1qry .= "ORDER BY product.price DESC";
    }
    if($filter == "l-h"){
      $f1qry .= "ORDER BY product.price ASC";
    }
  } else {
    $f1qry .= "ORDER BY category.category_name DESC";
  }


  $qry = $con->query("SELECT product.id AS product_id, product.name AS product_name, product.price AS product_price, category.category_name AS category_name,
  product_image.image AS product_image, product.color AS product_color
  FROM product 
  INNER JOIN product_image ON product.id = product_image.product_id 
  INNER JOIN category ON product.category_id = category.id WHERE product.active = '1' $fqry
  GROUP BY product_name $f1qry
  ");





if($qry === false){   
	echo mysqli_error($con)." - ";
	exit(__LINE__);
} else {

while ($product = $qry->fetch_assoc()){
?> 
      <?= '<a href="view/product/product_detail?id='.$product['product_id'].'" style="text-decoration: none; color: black;">'; ?>
          <div class="col-md-4" style="float: left;">
            <div class="card mb-4 shadow-sm">
            
            

              <img  style="max-height: 255px;"width="100%" height="255px" src="<?= BASEHREF;?>admin/assets/img/<?= $product['product_image'];?>" />
  
              </svg>
              <div class="card-body">
                <p class="card-text">Naam: <?= $product['product_name'];?></p>
                <small>Categorie: <?= $product['category_name'];?></small><br>
                <small id="total_places">Prijs: &euro;<?= $product['product_price'];?></small><br>
                  <?= '<a href="view/product/product_detail?id='.$product['product_id'].'" class="btn btn-sm btn-outline-primary">Product Bekijken</a>'; ?>

        

                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?= '</a>'?>
<?php
}
?>  
        </div>
      </div>
    </main>
    

  </body>
  <script src="https://kit.fontawesome.com/caef1a2785.js" crossorigin="anonymous"></script>

</html>
<?php
}
$qry->close();
?>
