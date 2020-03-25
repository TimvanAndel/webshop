<?php
session_start();
if (isset($_SESSION['loggedin_customer']) && $_SESSION['loggedin_customer'] == true) {
    
    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: login_customer.php");
    }
    

} else {
    header("Location: " . BASEHREF . "/view/login_customer.php");
}
?>