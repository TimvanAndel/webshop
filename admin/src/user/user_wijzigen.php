<?php
function updateUser(){
    global $con;
    
    $userFisrtName = mysqli_real_escape_string($con, $_POST['firstName']);
    $userMiddleName = mysqli_real_escape_string($con, $_POST['middleName']);
    $userLastName = mysqli_real_escape_string($con, $_POST['lastName']);
    $userBirthDate = mysqli_real_escape_string($con, $_POST['birthDate']);
    $userEmail = mysqli_real_escape_string($con, $_POST['email']);
    $userPassword = mysqli_real_escape_string($con, $_POST['password']);
    $userAdmin = mysqli_real_escape_string($con, $_POST['admin']);



    $query1 = $con->prepare("UPDATE user SET firstName = ?, middleName = ?, lastName = ?, birthDate = ?, `e-mailadres` = ?, password =?, admin = ? WHERE id = ? LIMIT 1;");
    if ($query1 === false) { 
      echo mysqli_error($con)." - ";
        exit(__LINE__);
    }
    
    $query1->bind_param('sssssssi', $userFisrtName, $userMiddleName, $userLastName, $userBirthDate, $userEmail, $userPassword, $userAdmin, $_GET['info']);
    if ($query1->execute() === false) { 
        echo mysqli_error($con)." - ";
        exit(__LINE__);
    } else {
        echo "user geupdate";
        header("Location: user_overzicht.php");
        $query1->close();
        
    }
}

?>
