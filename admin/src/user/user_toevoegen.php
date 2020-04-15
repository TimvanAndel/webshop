<?php
function addUser() {
    global $con;


    $userFirstName = mysqli_real_escape_string($con, $_POST['firstName']);
    $userMiddleName = mysqli_real_escape_string($con, $_POST['middleName']);
    $userLastName = mysqli_real_escape_string($con, $_POST['lastName']);
    $userBirthDate = mysqli_real_escape_string($con, $_POST['birthDate']);
    $userEmail = mysqli_real_escape_string($con, $_POST['email']);
    $userPassword = mysqli_real_escape_string($con, $_POST['password']);
    $userAdmin = mysqli_real_escape_string($con, $_POST['admin']);



    $query1 = $con->prepare('INSERT INTO user (firstName,middleName,lastName,birthDate,`e-mailadres`,password,admin) VALUES (?,?,?,?,?,?,?);');
    if ($query1 === false) {
        echo mysqli_error($con)." - ";
        exit(__LINE__);
    }
    $query1->bind_param('sssssss', $userFirstName, $userMiddleName, $userLastName, $userBirthDate, $userEmail, $userPassword, $userAdmin);
    if ($query1->execute() === false) {
        echo mysqli_error($con)." - ";
        exit(__LINE__);
    } else {
        echo "User toegevoegd";
        header("Location: user_overzicht.php");
        $query1->close();
    }





}






?>