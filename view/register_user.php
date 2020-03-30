<?php
    include("../config/connect.php");
    include("../src/register_user.php");
        
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
        <form action="../index.php">
            <button type="submit" class="btn btn-primary">Log In</button>
        </form>
        
          
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">User Registratie</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
<!-- __________________________________________ -->

<form method="post">

                    <div class="form-group">
                    <label >Naam</label><br>
                       <input type="text" class="form-control" name="field_firstname" id="fname" placeholder="Voornaam" required  style="float: left; width:40%;"/>
                        <input type="text" class="form-control" name="field_infixname" placeholder="Tussenvoegsel" style="float: left; width:20%;"/>
                        <input type="text" class="form-control" name="field_lastname" placeholder="Achternaam" required style="float: left; width:40%;"/><br><br>
                    </div>


                    <div class="form-group">
                    <label>Geboortedatum</label>
                        <input type="date" class="form-control" name="field_birthdate" id="birthdate" required /><br>
                    </div>

                    <div class="form-group">
                    <label>E-mailadres</label>
                        <input type="email" class="form-control" name="field_email" id="email" placeholder="E-mailadres" required /><br>
                    </div>

                    <div class="form-group">
                    <label>Wachtwoord</label>
                        <input type="password" class="form-control" name="field_password" id="passwd" placeholder="Wachtwoord" required /><br>
                    </div>

                    <input type="submit" class="btn btn-primary" name="submit" value="Registreren" />
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
