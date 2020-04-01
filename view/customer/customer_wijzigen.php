<?php
include("../../src/checklogin_user.php");
include("../../config/connect.php");
include("../../src/customer/customer_wijzigen.php");


if(!empty($_POST)){
    $updateCustomer = updateCustomer();
}


$id = $_GET["info"];
$qrySelect = $con->query("SELECT * FROM customer WHERE id= $id");

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
        <a href="customer_overzicht.php" class="navbar-brand d-flex align-items-center">
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
          <h1 class="jumbotron-heading">Klant Wijzigen</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
  
    
     <form method="post">



                    <div class="form-group">
                    <label for="gender">Gender</label><br><br>
                        <input type="radio" name="gender" id="gender" value="male" <?php if($resultSelect['gender'] == "male"){ ?>checked <?php } ?>><span>Man</span>
                        <input type="radio" name="gender" id="gender" value="female" <?php if($resultSelect['gender'] == "female"){ ?>checked <?php } ?>><span>Vrouw</span>
                        <input type="radio" name="gender" id="gender" value="Other" <?php if($resultSelect['gender'] == "other"){ ?>checked <?php } ?>><span>Overig</span>
                    </div><br>

                    <div class="form-group">
                    <label for="name" style="float: left;">Naam</label><br><br>
                       <input class="form-control" type="text" class="form-control" name="field_firstname" id="fname" placeholder="Voornaam" required style="width: 40%;float: left;" value="<?= $resultSelect['firstName'];?>"/>
                        <input class="form-control" type="text" class="form-control" name="field_infixname" placeholder="Tussenvoegsel" style="width: 20%; float: left;" value="<?= $resultSelect['middleName']; ?>" />
                        <input class="form-control" type="text" class="form-control" name="field_lastname" placeholder="Achternaam" required style="width: 40%;float: left;" value="<?= $resultSelect['lastName'];?>"/>
                    </div><br><br>


                    <div class="form-group">
                    <label for="street">Straat</label>
                        <input type="text" class="form-control" name="street" id="street" placeholder="Straat" required value="<?= $resultSelect['street'];?>"/><br>
                    </div>


                    <div class="form-group">
                    <label for="housenumber">Huisnummer</label><br>
                        <input type="text" class="form-control" name="housenumber" id="housenumber" placeholder="Huisnummer" required style="float: left; width: 70%;" value="<?= $resultSelect['houseNumber'];?>"/> <input type="text" class="form-control" name="housenumber_addon" id="housenumber_addon" placeholder="Toevoeging" style="float: left; width: 30%;" value="<?= $resultSelect['houseNumber_addon'];?>"/><br>
                    </div><br>

                    <div class="form-group">
                    <label for="zipcode">Postcode</label>
                        <input type="text" pattern="[1-9][0-9]{3}\s?[a-zA-Z]{2}" class="form-control" name="zipcode" id="zipcode" placeholder="Postcode" required value="<?= $resultSelect['zipCode'];?>"/><br>
                    </div>

                    <div class="form-group">
                    <label for="city">Plaats</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Plaats" required value="<?= $resultSelect['city'];?>"/><br>
                    </div>


                    <div class="form-group">
                    <label for="phone">Telefoonnummer</label>
                        <input type="text" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" class="form-control" name="phone" id="phone" placeholder="0612345678" required value="<?= $resultSelect['phone'];?>" /><br>
                    </div>


                    <div class="form-group">
                    <label for="email">E-mailadres</label>
                        <input type="email" class="form-control" name="field_email" id="email" placeholder="E-mailadres" required value="<?= $resultSelect['e-mailadres'];?>"/><br>
                    </div>

                    <div class="form-group">
                    <label for="password">Wachtwoord</label>
                        <input type="password" class="form-control" name="field_password" id="passwd" placeholder="Wachtwoord" required value="<?= $resultSelect['password'];?>"/><br>
                    </div>

                    <div class="form-group">
                    <label for="newsletter">Nieuwsbrief</label>
                        <input type="radio" name="newsletter" id="newsletter" value="yes"<?php if($resultSelect['newsletter_subscription'] == "yes"){ ?>checked <?php } ?>><span>Ja</span>
                        <input type="radio" name="newsletter" id="newsletter" value="no"<?php if($resultSelect['newsletter_subscription'] == "no"){ ?>checked <?php } ?>><span>Nee</span>
                    </div>

                    <button type="submit"  class="btn btn-primary" name="submit" value="Registreren" >Wijzigen</button>
                </form>
    
        </div>
      </div>

    </main>

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>