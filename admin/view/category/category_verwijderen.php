<?php
include("../../src/checklogin_user.php");
include("../../config/connect.php");

$id = $_GET['del'];
$qrySelect = $con->query("SELECT * FROM category WHERE id= $id");
$resultSelect = $qrySelect->fetch_assoc();
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
        <a href="category_overzicht.php" class="navbar-brand d-flex align-items-center">
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
          <h1 class="jumbotron-heading">Catogorie Verweideren</h1>
          <strong>Weet u zeker dat u dit catogorie wilt verweideren?</strong>    
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
            <label for="inputName">Naam:</label><br>
            <strong id="inputName"><?= $resultSelect['category_name']; ?></strong><br><br>
        </div>

        <div class="form-group">
            <label for="inputDescription">Beschrijving: </label><br>
            <strong id="inputName"><?= $resultSelect['description']; ?></strong><br><br>
        </div>

        <div class="form-group">
            <label for="inputActive">Actief: 1= Actief | 2= Niet Actief |</label><br>
            <strong id="inputName"><?= $resultSelect['active']; ?></strong>
        </div>

        
        <button type="submit" class="btn btn-danger" name="submit">Verweideren</button>
  </form>
  
        </div>
      </div>

    </main>

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>
<?php
if (isset($_POST["submit"])){
$qry = $con->query("DELETE FROM category WHERE id= $id");
echo "Category Verweiderd";
header("Location: category_overzicht.php");
if($con->error){
  echo "Category kon niet verweiderd worden.";

  }
} 
 
    

?>