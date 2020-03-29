<?php
include("../../config/connect.php");
include("../../src/products/product_toevoegen.php");





if(!empty($_POST)){
    $addProduct = addProduct();
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
          <h1 class="jumbotron-heading">Product Toevoegen</h1>
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
     <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="inputName">Naam</label>
            <input type="text" class="form-control" id="InputName" aria-describedby="Name" name="product_name">
        </div>

        <div class="form-group">
            <label for="inputDescription">Beschrijving</label>
            <input type="text"  class="form-control" id="InputDescription" aria-describedby="Description" name="product_description">
        </div>

        <div class="form-group">
            <label for="inputCategory">Categorie: <?php $qry = $con->query("SELECT * FROM category"); while($category = $qry->fetch_assoc()){ echo $category['id'] . "= " . $category['category_name'] . " | "; }?></label>
            <input type="text" class="form-control" id="InputCategory" aria-describedby="Category" name="product_category">
        </div>

        <div class="form-group">
            <label for="inputPrice">Prijs</label>
            <input type="text" class="form-control" id="InputPrice" aria-describedby="Price" name="product_price">
        </div>

        <div class="form-group">
            <label for="inputColor">Kleur</label>
            <input type="text" class="form-control" id="InputColor" aria-describedby="Color" name="product_color">
        </div>

        <div class="form-group">
            <label for="inputWeight">Gewicht</label>
            <input  type="text" class="form-control" id="InputWeight" aria-describedby="Weight" name="product_weight">
        </div>

        <div class="form-group">
            <label for="inputActive">Actief: 1= Actief | 2= Niet Actief |</label>
            <input type="text" class="form-control" id="InputActive" aria-describedby="Active" name="product_active">
        </div>

        <input type="file" name="fileToUpload">
        
        <button type="submit" class="btn btn-primary">Toevoegen</button>
  </form>
    
        </div>
      </div>

    </main>

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>