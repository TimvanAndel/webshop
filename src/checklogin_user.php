<?php
session_start();
if (isset($_SESSION['loggedin_user']) && $_SESSION['loggedin_user'] == true) {
    
    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: ../index.php");
    }
    

} else {
    $location = "Location: http://localhost/school/Periode_3/php/github/tim-webshop/index.php";
    header($location);
}
?>