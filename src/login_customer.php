<?php
session_start();
$_SESSION['loggedin_customer'] = false;
function logIn(){
    global $con;
    $eMail='';
    // database connecten
    // inloggen
    // checken of de customer in de database staat
    if(isset($_POST['field_email']) && $_POST['field_email'] != ''){
        $eMail = dbp($_POST['field_email']);
    } else {
        echo "email is niet ingevuld<br>";
    }

    if(isset($_POST['field_password']) && $_POST['field_password'] != ''){
        $passWord = dbp($_POST['field_password']);
    } else {
        echo "wachtwoord is niet ingevuld<br>";
    }

    $qry = $con->query("SELECT * FROM `customer` WHERE `e-mailadres`='$eMail'");




         
   

    if($qry === false){   
        echo mysqli_error($con)." - ";
        exit(__LINE__);
    } else {
        // echo $qry->num_rows;

        if($qry->num_rows == 1){
            
                // password check
                $qry2 = $con->query("SELECT * FROM `customer` WHERE `e-mailadres`='$eMail' and password='$passWord'");

                if($qry === false){   
                    echo mysqli_error($con)." - ";
                    exit(__LINE__);
                } else {
                    if($qry2->num_rows == 1){
                        echo "u bent ingelogd";
                        $_SESSION['loggedin_customer'] = true;
                        $_SESSION['email_customer'] = $eMail;
                        $_SESSION['password_customer'] = $passWord;                    
                        header("Location: index_customer.php");
                    } else{
                        echo "wachtwoord onjuist";
                    }
                }
                   
        
            } else {
            
            echo "gebruiker bestaad niet";
            echo "<script>document.getElementById('message').innerHTML = 'hello';</script>";
            
        }
        
    }
    $qry->close();



}
?>