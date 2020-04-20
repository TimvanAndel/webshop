<?php
include("../../src/checklogin_user.php");
include("../../config/connect.php");
$qry = $con->query("SELECT * FROM customer ORDER BY lastName");
if($qry === false){   
	echo mysqli_error($con)." - ";
	exit(__LINE__);
} else {
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
        <a href="../index" class="navbar-brand d-flex align-items-center">
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
          <h1 class="jumbotron-heading">Klanten</h1>
          <a href="customer_toevoegen" class="btn btn-primary">Klant Toevoegen</a><br>
          
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
        <div class="row" >
<?php 

while ($customer = $qry->fetch_assoc()){

 

?> 


          
          <div class="col-md-4" style="float: left;">
            <div class="card mb-4 shadow-sm" >
            
                   
              <div class="card-body"> 
                <strong class="card-text">Naam: <?= $customer['firstName'] . " " . $customer['middleName'] . " " . $customer['lastName'] ;?></strong>
                <?php 
                    echo '<a href=" customer_verwijderen?del='.$customer['id'].'" class="del_btn" style="float: right;margin-right: 20px">
                   
                    <svg class="bi bi-trash-fill" width="25px" height="25px" alt="delete" style="position: absolute;cursor: pointer;" onclick="del()" width="1em" height="1em" viewBox="0 0 16 16" fill="red" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z" clip-rule="evenodd"/>
                    </svg>
                    </a>';
                    
                    ?>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">     
                    
                  <?='<a href=" customer_wijzigen?info='.$customer['id'].'" class="del_btn" style="margin-top: 20px;">
                  <button class="btn btn-primary">Klant wijzigen</button>
                  </a>'; ?>       
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php
}
?>  
        </div>
      </div>
    </main>
  </body>
</html>
<?php
}

?>