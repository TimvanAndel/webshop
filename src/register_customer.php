<?php



function setFormData(){
    // valideren van formulier data
    // formdata in database zetten
    // checken of de data is opgeslagen
    global $con;
   
   
  
  
    // phone-

  
    // newsletter_subscription
    
    
    if(isset($_POST['gender']) && $_POST['gender'] != ''){
        $gender = dbp($_POST['gender']);
    } else {
        echo "Gender is verplicht";
    }

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


    if(isset($_POST['street']) && $_POST['street'] != ''){
        $street = dbp($_POST['street']);
    } else {
        echo "Straat is verplicht";
    }


    if(isset($_POST['housenumber']) && $_POST['housenumber'] != ''){
        $housenumber_addon = dbp($_POST['housenumber']);
    } else {
        echo "Huisnummer is verplicht";
    }

    if(isset($_POST['housenumber_addon']) && $_POST['housenumber_addon'] != ''){
        $housenumber = dbp($_POST['housenumber_addon']);
    } 
    

    if(isset($_POST['zipcode']) && $_POST['zipcode'] != ''){
        $zipcode = dbp($_POST['zipcode']);
    } else {
        echo "Postcode is verplicht";
    }


    if(isset($_POST['city']) && $_POST['city'] != ''){
        $city = dbp($_POST['city']);
    } else {
        echo "Plaats is verplicht";
    }


    if(isset($_POST['phone']) && $_POST['phone'] != ''){
        $phone = dbp($_POST['phone']);
    } else {
        echo "Telefoonnummer is verplicht";
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

    if(isset($_POST['newsletter']) && $_POST['newsletter'] != ''){
        $newsletter = dbp($_POST['newsletter']);
    } else {
        echo "Nieuwsbrief is verplicht";
    }




    $query1 = $con->prepare('INSERT INTO customer (gender, firstName, middleName, lastName, street, houseNumber, houseNumber_addon, zipCode, city, phone, `e-mailadres`, password, newsletter_subscription) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');
    if ($query1 === false) {
    	echo mysqli_error($con)." - ";
    	exit(__LINE__);
    }
    $query1->bind_param('sssssisssssss', $gender, $firstName, $middleName, $lastName, $street, $housenumber, $housenumber_addon, $zipcode, $city, $phone, $email, $password, $newsletter);
    if ($query1->execute() === false) {
    	echo mysqli_error($con)." - ";
    	exit(__LINE__);
    } else {
    	echo "Gebruiker toegevoegd";
    	$query1->close();
    }

}


?>