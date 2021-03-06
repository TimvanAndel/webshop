<?php
include("../../src/checklogin_user.php");
include("../../config/connect.php");

$id = $_GET['del'];
$qrySelect = $con->query("SELECT * FROM user WHERE id= $id");
$resultSelect = $qrySelect->fetch_assoc();
?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../assets/favicon/apple.png">

    <title>Tim van Andel - Gebruikers</title>

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
        <a href="user_overzicht" class="navbar-brand d-flex align-items-center">
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
          <h1 class="jumbotron-heading">Gebruiker Verweideren</h1>
          <strong>Weet u zeker dat u deze gebruiker wilt verweideren?</strong>    
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
            <strong id="inputName"><?= $resultSelect['firstName'] . " " . $resultSelect["middleName"] . " " . $resultSelect["lastName"] ; ?></strong>
        </div>

        
        
        <div class="form-group">
            <label for="inputZipcode">Geboortedatum:</label><br>
            <strong id="inputZipcode"><?= $resultSelect['birthDate']; ?></strong>
        </div>


        <div class="form-group">
            <label for="inputEmail">Email:</label><br>
            <strong id="inputEmail"><?= $resultSelect['e-mailadres']; ?></strong>
        </div>


        <div class="form-group">
            <label for="inputPassword">Wachtwoord:</label><br>
            <strong id="inputPassword"><?= $resultSelect['password']; ?></strong>
        </div>

        <div class="form-group">
            <label for="inputNewsletter">Admin:</label><br>
            <strong id="inputNewsletter"><?= $resultSelect['admin']; ?></strong>
        </div>

        
        <button type="submit" class="btn btn-danger" name="submit">Verweideren</button>
  </form>
  
        </div>
      </div>

    </main>

    

    
  </body>
</html>
<?php
if (isset($_POST["submit"])){
$qry = $con->query("DELETE FROM user WHERE id= $id");
echo "Customer Verweiderd";
if($con->error){
  echo "Customer kon niet verweiderd worden.";

  } else {
      ?>
    <script> location.replace("user_overzicht"); </script>
  <?php
  }
} 
 
    

?>