<!-- <?php
session_start();
if (isset($_SESSION['loggedin_customer']) && $_SESSION['loggedin_customer'] == true) {
    
    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: login_customer.php");
    }
    

} else {
    $location = "Location: http://localhost/school/Periode_3/php/github/tim-webshop/view/index_customer.php";
    header($location);
}
?> -->