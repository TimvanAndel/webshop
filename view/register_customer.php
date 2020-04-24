<?php
    include("../config/connect.php");
    include("../src/register_customer.php");
        
    // dd($_POST);

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
    <link rel="icon" href="../assets/favicon/apple.png">

    <title>Tim van Andel - Registreren</title>

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
        <a href="../" class="navbar-brand d-flex align-items-center">
            <strong>Tim van Andel - Webshop</strong>
        </a>
        
          
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Registreren</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
<!-- __________________________________________ -->

<form method="post">



                    <div class="form-group">
                    <label for="gender">Gender</label><br>
                        <input type="radio" name="gender" id="gender" value="male" ><span>Man</span>
                        <input type="radio" name="gender" id="gender" value="female" ><span>Vrouw</span>
                        <input type="radio" name="gender" id="gender" value="Other" ><span>Overig</span>
                    </div><br>

                    <div class="form-group">
                    <label for="name" style="float:left;">Naam</label><br><br>
                       <input class="form-control" type="text" class="form-control" name="field_firstname" id="fname" placeholder="Voornaam" required style="width:40%;float:left;"/>
                        <input class="form-control" type="text" class="form-control" name="field_infixname" placeholder="Tussenvoegsel" style="width:20%;float:left;"/>
                        <input class="form-control" type="text" class="form-control" name="field_lastname" placeholder="Achternaam" required style="width:40%;float:left;" />
                    </div><br><br>


                    <div class="form-group">
                    <label for="street">Straat</label>
                        <input type="text" class="form-control" name="street" id="street" placeholder="Straat" required /><br>
                    </div>


                    <div class="form-group">
                    <label for="housenumber" style="float:left;">Huisnummer</label><br><br>
                        <input type="text" class="form-control" name="housenumber" id="housenumber" placeholder="Huisnummer" required style="width:40%;float:left;"/> <input type="text" class="form-control" name="housenumber_addon" id="housenumber_addon" placeholder="Toevoeging" style="width:30%;float:left;"/><br>
                    </div><br><br>

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

                    <input type="submit" style="float: right;" class="btn btn-primary" name="submit" value="Registreren" /> <br><br>
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
