<?php
// database connectie
include("../../config/connect.php");

session_start();
if(isset($_SESSION['loggedin_customer'] ) && $_SESSION['loggedin_customer'] == true){
  

} else {
  header("Location: ../../");
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../assets/favicon/apple.png">

    <title>Tim van Andel - Account</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
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
        <a href="../../" style="text-decoratoin: none; outline: none;">   
          <strong style="color: white;">Tim van Andel - Webshop</strong>
        </a>

          <span>
          <a>

          
           
              <form method='post' style='float: left;'>
              <button type='submit' class='btn btn-primary' name='logout'>Log uit</button>
              </form>
              <?php
              if(isset($_POST['logout'])){
                session_destroy();
                header("Refresh:0");
              }
              ?>
          
         
             
            </a>
          </span>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Mijn Account</h1>
          
        </div>
      </section>
      <?php
        $customer_id = $_SESSION['customer_id'];

        $qry = $con->query("SELECT tbl_order.id AS order_id, tbl_order.customer_id AS customer_id, tbl_order.date AS date, tbl_order.payment_method AS payment_method, tbl_order.price AS price, tbl_order.paid AS paid, tbl_order.status AS status 
        FROM tbl_order 
        INNER JOIN customer ON tbl_order.customer_id = customer.id
        WHERE customer.id = $customer_id
        ") or die($con->error);

        







      ?>




      <div class="album py-5 bg-light">
        <div class="container">
        <h4>Uw Bestellingen</h4>
        <div class="row">
        <style>
        td{
          border-bottom: 1px solid grey;
          width: 25%;
        }
        th{
          width: 25%;
          border-bottom: 1px solid grey;
        }
        table tr:nth-child(even) {
        background-color: #eee;
        }
        table tr:nth-child(odd) {
        background-color: #fff;
        }
        </style>
        <div class="col-md-4" style="float: left;">
        <div class="card mb-4 shadow-sm" style="width: 275%;">
              <table>
              <tr>
                <th>Datum</th>
                <th>Prijs</th>
                <th>Betaald</th>
                <th>Satus</th>
                <th>Bekijk Bestelling</th>
              </tr>
              <?php while($result = $qry->fetch_assoc()){
       

              $phpdate = strtotime( $result['date'] );
              $mysqldate = date( 'd-m-Y H:i:s', $phpdate );


                if($result['paid'] == 0){
                  $paid = 'nee';
                } else {
                  $paid = 'ja';
                }

                
                ?>
                <tr>
                <td><?= $mysqldate ?></td>
                <td><?= "&euro;".$result['price'] ?></td>
                <td><?= $paid ?></td>
                <td><?= $result['status'] ?></td>
                <td><a href="bestelling_bekijken?order=<?=$result['order_id']?>">Bekijk hier</a></td>
                </tr>
                <?php
              }
              ?>
              
              </table>

        </div>
        </div>




        </div>
      </div>
    </main>
    

  </body>
  <script src="https://kit.fontawesome.com/caef1a2785.js" crossorigin="anonymous"></script>

</html>

