<?php
session_start();
if (isset($_SESSION['loggedin_user']) && $_SESSION['loggedin_user'] == true) {
    
    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: ../index.php");
    }
    

} else {
    header("Location: " . BASEHREF . "/index.php");
}
?>