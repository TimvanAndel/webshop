<?php
function updateCustomer(){
    global $con;
    
    $customerGender = mysqli_real_escape_string($con, $_POST['gender']);
    $customerFisrtName = mysqli_real_escape_string($con, $_POST['field_firstname']);
    $customerMiddleName = mysqli_real_escape_string($con, $_POST['field_infixname']);
    $customerLastName = mysqli_real_escape_string($con, $_POST['field_lastname']);
    $customerStreet = mysqli_real_escape_string($con, $_POST['street']);
    $customerHouseNumber = mysqli_real_escape_string($con, $_POST['housenumber']);
    $customerHouseNumberAddon = mysqli_real_escape_string($con, $_POST['housenumber_addon']);
    $customerZipCode = mysqli_real_escape_string($con, $_POST['zipcode']);
    $customerCity = mysqli_real_escape_string($con, $_POST['city']);
    $customerPhone = mysqli_real_escape_string($con, $_POST['phone']);
    $customerEmail = mysqli_real_escape_string($con, $_POST['field_email']);
    $customerPassword = mysqli_real_escape_string($con, $_POST['field_password']);
    $customerNewsletter = mysqli_real_escape_string($con, $_POST['newsletter']);



    $query1 = $con->prepare("UPDATE customer SET gender = ?, firstName = ?, middleName = ?, lastName = ?, street = ?, houseNumber = ?, houseNumber_addon =?, zipCode = ?, city =?, phone = ?, `e-mailadres` = ?, password = ?, newsletter_subscription = ?  WHERE id = ? LIMIT 1;");
    if ($query1 === false) { 
      echo mysqli_error($con)." - ";
        exit(__LINE__);
    }
    
    $query1->bind_param('sssssisssssssi', $customerGender, $customerFisrtName, $customerMiddleName, $customerLastName, $customerStreet, $customerHouseNumber, $customerHouseNumberAddon, $customerZipCode, $customerCity, $customerPhone, $customerEmail, $customerPassword, $customerNewsletter, $_GET['info']);
    if ($query1->execute() === false) { 
        echo mysqli_error($con)." - ";
        exit(__LINE__);
    } else {
        echo "customer geupdate";
        header("Location: customer_overzicht");
        $query1->close();
        
    }
}

?>
