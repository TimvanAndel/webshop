<?php
include("../../config/connect.php");
include("../../src/cart/overzicht.php");
session_start();


if(!empty($_POST)){
  $sfd = setFormData();
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
          <h1 class="jumbotron-heading">Uw gegevens</h1>
          <h5>kloppen uw gegevens?</h5>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
        <div class="row">
 
         <?php


$totalprice = 0;


if(isset($_SESSION['cart']['producten']) && !empty($_SESSION['cart']['producten'])){
  
    if(isset($_SESSION['loggedin_customer'] ) && $_SESSION['loggedin_customer'] == true){
        ?>
        <div class="col-md-4" style="float: left;">
        <div class="card mb-4 shadow-sm">
            <span>Naam: <?=$_SESSION['firstName'] . " " . $_SESSION['middleName'] . " " . $_SESSION['lastName'];?></span><br>
            <span>Adres: <?=$_SESSION['street'] . " " . $_SESSION['houseNumber'] . $_SESSION['houseNumber_addon'] . " " . $_SESSION['city'];?></span><br>
            <span>Email: <?=$_SESSION['email_customer'];?></span><br>
            <span>Telefoon: <?=$_SESSION['phone'];?></span><br>
        </div>
        </div>

        <div class="col-md-4" style="float: left;">
        <div class="card mb-4 shadow-sm">
            <?php
            $totalprice = 0;
            $bezorgkosten = 5.50;
            $totalprice = number_format($totalprice, 2);
            $bezorgkosten = number_format($bezorgkosten, 2);
            $eindprijs = 0;
            $eindprijs = number_format($eindprijs, 2);

            foreach($_SESSION['cart']['producten'] as $key => $product){
                echo "<br>";
                echo $product['titel']."<br>";
                echo "&euro;".$product['prijs']."<br>";
                echo $product['kleur'];
                echo "<hr>";
                $totalprice += $product['prijs'];

            }
                $eindprijs = $totalprice + $bezorgkosten;
                echo "<p>Prijs: &euro; $totalprice </p>";
                echo "<p>Bezorg Kosten: &euro; $bezorgkosten +</p>";
                echo "<div style='width: 50%;float: left; border-top: 1px solid black; margin-top: -5px;' >";
                echo "<p style='float: left;'>Totale Prijs: &euro; $eindprijs </p>";
            ?>
            
        </div>
    </div>
    </div>


    
    <div class="col-md-4" style="float: left;">
    <div class="card mb-4 shadow-sm">
        <form action="" method="post">
            <select name="paymethod" id="paymethod" class="form-control" required>
                <option value="" disabled selected>Kies een betaal methode</option>
                <option value="achteraf" >Achteraf Betalen</option>
            </select>

            <br>

            <input type="checkbox" name="terms_and_conditions" id="terms_and_conditions" required style="margin-left: 10px;">Agree to the <b><a href="#" style="color: black;">Terms & Conditions</a></b>

            <br><br>

            <input type="hidden" name="firstName" value="<?= $_SESSION['firstName']?>">
            <input type="hidden" name="middleName" value="<?= $_SESSION['middleName']?>">
            <input type="hidden" name="lastName" value="<?= $_SESSION['lastName']?>">

            <input type="hidden" name="street" value="<?= $_SESSION['street']?>">
            <input type="hidden" name="houseNumber" value="<?= $_SESSION['houseNumber']?>">
            <input type="hidden" name="houseNumber_addon" value="<?= $_SESSION['houseNumber_addon']?>">
            <input type="hidden" name="city" value="<?= $_SESSION['city']?>">
            <input type="hidden" name="zipCode" value="<?= $_SESSION['zipCode']?>">

            <input type="hidden" name="email" value="<?= $_SESSION['email_customer']?>">
            <input type="hidden" name="phone" value="<?= $_SESSION['phone']?>">

            <input type="hidden" name="price" value="<?= $eindprijs?>">




            <input type="submit" name="submit_payment" value="Bestelling Afronden" class="btn btn-warning" style="float: right; margin-top: -10px;margin-left: -10px;">
            <br>
            <br>
        </form>
    
    </div>
    </div>
    </div>
    </div>


        <?php
       } else {

            


            $firstName = $_POST['firstName'];
            $middleName = $_POST['middleName'];
            $lastName = $_POST['lastName'];
            $street = $_POST['street'];
            $houseNumber = $_POST['houseNumber'];
            $houseNumber_addon = $_POST['houseNumber_addon'];
            $zipCode = $_POST['zipCode'];
            $city = $_POST['city'];
            $phone = $_POST['phone']; 
            $email = $_POST['email']; 
        
        
        ?>
        <div class="col-md-4" style="float: left;">
        <div class="card mb-4 shadow-sm">
        <span>Naam: <?=$firstName . " " . $middleName . " " . $lastName;?></span><br>
        <span>Adres: <?=$street . " " . $houseNumber . $houseNumber_addon . " " . $city;?></span><br>
        <span>Email: <?=$email;?></span><br>
        <span>Telefoon: <?=$phone;?></span><br>
        </div>
        </div>

        <div class="col-md-4" style="float: left;">
        <div class="card mb-4 shadow-sm">
            <?php
            $totalprice = 0;
            $bezorgkosten = 5.50;
            $totalprice = number_format($totalprice, 2);
            $bezorgkosten = number_format($bezorgkosten, 2);
            $eindprijs = 0;
            $eindprijs = number_format($eindprijs, 2);

            foreach($_SESSION['cart']['producten'] as $key => $product){
                echo "<br>";
                echo $product['titel']."<br>";
                echo "&euro;".$product['prijs']."<br>";
                echo $product['kleur'];
                echo "<hr>";
                $totalprice += $product['prijs'];

            }
                $eindprijs = $totalprice + $bezorgkosten;
                echo "<p>Prijs: &euro; $totalprice </p>";
                echo "<p>Bezorg Kosten: &euro; $bezorgkosten +</p>";
                echo "<div style='width: 50%;float: left; border-top: 1px solid black; margin-top: -5px;' >";
                echo "<p style='float: left;'>Totale Prijs: &euro; $eindprijs </p>";
            ?>
            
        </div>
    </div>
    </div>



    <div class="col-md-4" style="float: left;">
    <div class="card mb-4 shadow-sm">
        <form action="" method="post">
            <select name="paymethod" id="paymethod" class="form-control" required>
                <option value="" disabled selected>Kies een betaal methode</option>
                <option value="achteraf" >Achteraf Betalen</option>
            </select>

            <br>

            <input type="checkbox" name="terms_and_conditions" id="terms_and_conditions" required>Agree to the <b><a href="#" style="color: black;">Terms & Conditions</a></b>

            <br><br>

            <input type="hidden" name="firstName" value="<?= $firstName?>">
            <input type="hidden" name="middleName" value="<?= $middleName?>">
            <input type="hidden" name="lastName" value="<?= $lastName?>">

            <input type="hidden" name="street" value="<?= $street?>">
            <input type="hidden" name="houseNumber" value="<?= $houseNumber?>">
            <input type="hidden" name="houseNumber_addon" value="<?= $houseNumber_addon?>">
            <input type="hidden" name="city" value="<?= $city?>">
            <input type="hidden" name="zipCode" value="<?= $zipCode?>">


            <input type="hidden" name="email" value="<?= $email?>">
            <input type="hidden" name="phone" value="<?= $phone?>">

            <input type="hidden" name="price" value="<?= $eindprijs?>">





            <input type="submit" name="submit_payment" value="Bestelling Afronden" class="btn btn-warning" >
        </form>
    </div>
    </div>


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
