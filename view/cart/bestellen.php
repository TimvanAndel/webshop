<?php
include("../../config/connect.php");
session_start();



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
          

        <a href="winkelmand" class="navbar-brand d-flex align-items-center">
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
          <h1 class="jumbotron-heading">Bestellen</h1>
          <h5>Vul uw gegevens in:</h5>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
        
 
         <?php


$totalprice = 0;


if(isset($_SESSION['cart']['producten']) && !empty($_SESSION['cart']['producten'])){
  
    if(isset($_SESSION['loggedin_customer'] ) && $_SESSION['loggedin_customer'] == true){
    ?>
        <form action="overzicht" method="POST">
            <label for="firstName" style="float: left;">Voornaam / </label><label for="middleName" style="float: left;"> Tussenvoegsel /</label><label for="lastName" style="float: left;"> Achternaam:</label>
            <br><br>
            <input type="text" name="firstName" id="firstName" placeholder="Voornaam" class="form-control" value="<?=  $_SESSION['firstName']; ?>" style="float: left; width: 40%;" required>

            <input type="text" name="middleName" id="middleName" placeholder="Tussenvoegsel" class="form-control" value="<?=  $_SESSION['middleName']; ?>" style="float: left; width: 20%;">
            
            <input type="text" name="lastName" id="lastName" placeholder="Achternaam" class="form-control" value="<?=  $_SESSION['lastName']; ?>" style="float: left; width: 40%;" required>
            <br><br><br>


            <label for="street" style="float: left;">Straat / </label><label for="houseNumber" style="float: left;"> Huisnummer / </label><label for="houseNumber_addon" style="float: left;"> Huisnummer Toevoeging:</label>
            <br><br>
            <input type="text" name="street" id="street" placeholder="Straat" class="form-control" value="<?= $_SESSION['street']; ?>" style="float: left; width: 50%;" required>

            <input type="text" name="houseNumber" id="houseNumber" placeholder="Huisnummer" class="form-control" value="<?= $_SESSION['houseNumber']; ?>" style="float: left; width: 30%;" required>
           
            <input type="text" name="houseNumber_addon" id="houseNumber_addon" placeholder="Huisnummer Toevoeging" class="form-control" value="<?= $_SESSION['houseNumber_addon']; ?>" style="float: left; width: 20%;">
            <br><br><br>


            <label for="city" style="float: left;">Plaats / </label><label for="zipCode" style="float: left;"> Postcode:</label>
            <br><br>
            <input type="text" name="city" id="city" placeholder="Plaats" class="form-control" value="<?= $_SESSION['city']; ?>" style="float: left; width: 50%;" required>

            <input type="text" pattern="[1-9][0-9]{3}\s?[a-zA-Z]{2}" name="zipCode" id="zipCode" placeholder="Postcode" class="form-control" value="<?= $_SESSION['zipCode']; ?>" style="float: left; width: 50%;" required>
            <br><br><br>


            <label for="email" style="float: left;">Email / </label><label for="phone" style="float: left;"> telefoonnummer:</label>
            <br><br>
            <input type="text" name="email" id="email" placeholder="Email" class="form-control" value="<?= $_SESSION['email_customer']; ?>" style="float: left; width: 50%;" required>

            <input type="text" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" name="phone" id="phone" placeholder="Telefoonnummer" class="form-control" value="<?= $_SESSION['phone']; ?>" style="float: left; width: 50%;">
            <br><br><br>
            

            


            <input type="submit" name="submit" value="Bestellen" class="btn btn-warning" style="float: right;">
        </form>
    <?php
    
    } else {
        ?>
        <form action="overzicht" method="POST">
            <label for="firstName" style="float: left;">Voornaam / </label><label for="middleName" style="float: left;"> Tussenvoegsel /</label><label for="lastName" style="float: left;"> Achternaam:</label>
            <br><br>
            <input type="text" name="firstName" id="firstName" placeholder="Voornaam" class="form-control" style="float: left; width: 40%;" required>

            <input type="text" name="middleName" id="middleName" placeholder="Tussenvoegsel" class="form-control" style="float: left; width: 20%;">
            
            <input type="text" name="lastName" id="lastName" placeholder="Achternaam" class="form-control" style="float: left; width: 40%;" required>
            <br><br><br>


            <label for="street" style="float: left;">Straat / </label><label for="houseNumber" style="float: left;"> Huisnummer / </label><label for="houseNumber_addon" style="float: left;"> Huisnummer Toevoeging:</label>
            <br><br>
            <input type="text" name="street" id="street" placeholder="Straat" class="form-control" style="float: left; width: 50%;" required>

            <input type="text" name="houseNumber" id="houseNumber" placeholder="Huisnummer" class="form-control" style="float: left; width: 30%;" required>
           
            <input type="text" name="houseNumber_addon" id="houseNumber_addon" placeholder="Huisnummer Toevoeging" class="form-control" style="float: left; width: 20%;">
            <br><br><br>


            <label for="city" style="float: left;">Plaats / </label><label for="zipCode" style="float: left;"> Postcode:</label>
            <br><br>
            <input type="text" name="city" id="city" placeholder="Plaats" class="form-control" style="float: left; width: 50%;" required>

            <input type="text" pattern="[1-9][0-9]{3}\s?[a-zA-Z]{2}" name="zipCode" id="zipCode" placeholder="Postcode" class="form-control" style="float: left; width: 50%;" required>
            <br><br><br>


            <label for="email" style="float: left;">Email / </label><label for="phone" style="float: left;"> telefoonnummer:</label>
            <br><br>
            <input type="text" name="email" id="email" placeholder="Email" class="form-control" style="float: left; width: 50%;" required>

            <input type="text" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" name="phone" id="phone" placeholder="Telefoonnummer" class="form-control" style="float: left; width: 50%;">
            <br><br><br>

           


            <input type="submit" name="submit" value="Bestellen" class="btn btn-warning" style="float: right;">
        </form>
        <?php

          
         



    }


?>
  



  



  
  <?php
} else {
  echo "<h5>Er is iets fout gegaan, <a href='winkelmand'>Klik hier om terug te gaan.</a></h5>";
}
?>

            </div> 
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
