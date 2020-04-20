<?php



function setFormData(){
    // valideren van formulier data
    // formdata in database zetten
    // checken of de data is opgeslagen
    global $con;


    if(isset($_POST['field_firstname']) && $_POST['field_firstname'] != ''){
        $firstName = dbp($_POST['field_firstname']);
    } else {
        echo "Voornaam is verplicht";
    }

    if(isset($_POST['field_infixname'])){
        $middleName = dbp($_POST['field_infixname']);
    } 

    if(isset($_POST['field_lastname']) && $_POST['field_lastname'] != ''){
        $lastName = dbp($_POST['field_lastname']);
    } else {
        echo "Achternaam is verplicht";
    }

    if(isset($_POST['field_birthdate']) && $_POST['field_birthdate'] != ''){
        $birthDate = dbp($_POST['field_birthdate']);
    } else {
        echo "Geboorte datum is verplicht";
    }

    if(isset($_POST['field_email']) && $_POST['field_email'] != ''){
        $email = dbp($_POST['field_email']);
    } else {
        echo "Email is verplicht";
    }

    if(isset($_POST['field_password']) && $_POST['field_password'] != ''){
        $password = dbp($_POST['field_password']);
    } else {
        echo "Wachtwoord is verplicht";
    }




    $query1 = $con->prepare('INSERT INTO user (firstName, middleName, lastName, birthDate, `e-mailadres`, password) VALUES (?, ?, ?, ?, ?, ?);');
    if ($query1 === false) {
    	echo mysqli_error($con)." - ";
    	exit(__LINE__);
    }
    $query1->bind_param('ssssss', $firstName, $middleName, $lastName, $birthDate, $email, $password);
    if ($query1->execute() === false) {
    	echo mysqli_error($con)." - ";
    	exit(__LINE__);
    } else {
        echo "Gebruiker toegevoegd";
        header("Location: ../index");
        
    	$query1->close();
    }

}


?>