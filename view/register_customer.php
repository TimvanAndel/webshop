<?php
    include("../config/connect.php");
    include("../src/register_customer.php");
        
    // dd($_POST);

    if(!empty($_POST)){
        $sfd = setFormData();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratie Customers</title>
    <link rel="stylesheet" href="../assets/css/register/register.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
       
                   <form method="post">



                    <div class="form-group">
                    <label for="gender">Gender</label>
                        <input type="radio" name="gender" id="gender" value="male" class="form-control"><span>Man</span>
                        <input type="radio" name="gender" id="gender" value="female" class="form-control"><span>Vrouw</span>
                        <input type="radio" name="gender" id="gender" value="Other" class="form-control"><span>Overig</span>
                    </div>

                    <div class="form-group">
                    <label for="name">Naam</label>
                       <input class="form-control" type="text" class="form-control" name="field_firstname" id="fname" placeholder="Voornaam" required />
                        <input class="form-control" type="text" class="form-control" name="field_infixname" placeholder="Tussenvoegsel" />
                        <input class="form-control" type="text" class="form-control" name="field_lastname" placeholder="Achternaam" required />
                    </div>


                    <div class="form-group">
                    <label for="street">Straat</label>
                        <input type="text" class="form-control" name="street" id="street" placeholder="Straat" required /><br>
                    </div>


                    <div class="form-group">
                    <label for="housenumber">Huisnummer</label>
                        <input type="text" class="form-control" name="housenumber" id="housenumber" placeholder="Huisnummer" required /> <input type="text" class="form-control" name="housenumber_addon" id="housenumber_addon" placeholder="Toevoeging"/><br>
                    </div>

                    <div class="form-group">
                    <label for="zipcode">Postcode</label>
                        <input type="text" pattern="[1-9][0-9]{3}\s?[a-zA-Z]{2}" class="form-control" name="zipcode" id="zipcode" placeholder="Postcode" required /><br>
                    </div>

                    <div class="form-group">
                    <label for="city">Plaats</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Plaats" required /><br>
                    </div>


                    <div class="form-group">
                    <label for="phone">Telefoonnummer</label>
                        <input type="text" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" class="form-control" name="phone" id="phone" placeholder="0612345678" required /><br>
                    </div>


                    <div class="form-group">
                    <label for="email">E-mailadres</label>
                        <input type="email" class="form-control" name="field_email" id="email" placeholder="E-mailadres" required /><br>
                    </div>

                    <div class="form-group">
                    <label for="password">Wachtwoord</label>
                        <input type="password" class="form-control" name="field_password" id="passwd" placeholder="Wachtwoord" required /><br>
                    </div>

                    <div class="form-group">
                    <label for="newsletter">Nieuwsbrief</label>
                        <input type="radio" name="newsletter" id="newsletter" value="yes"><span>Ja</span>
                        <input type="radio" name="newsletter" id="newsletter" value="no"><span>Nee</span>
                    </div>

                    <input type="submit" class="form-control" class="btn btn-black" name="submit" value="Registreren" />
                </form>
            
       
    </body>
</html>
























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
          <h1 class="jumbotron-heading">User Log in</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
<!-- __________________________________________ -->

<form method="post" >
                      <div class="form-group">
                         <label>E-mailadres</label>
                         <input type="text" class="form-control" name="field_email" placeholder="Email" required>
                      </div>
                      <div class="form-group">
                         <label>Wachtwoord</label>
                         <input type="password" class="form-control" name="field_password" placeholder="Password" required>
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Login</button>
                      <a href="<?= BASEHREF;?>view/register_user.php" class="btn btn-secondary">Registreer</a>
                      <div class="form-group" id="message">
                      
                      </div>
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
if(isset($_POST['logout'])){
    session_destroy();
    header("Location: ../index.php");
}
?>
