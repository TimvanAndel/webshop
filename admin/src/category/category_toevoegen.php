<?php
function addCategory(){
    global $con;
    
    $categoryName = mysqli_real_escape_string($con, $_POST['category_name']);
    $categoryDescription = mysqli_real_escape_string($con, $_POST['category_description']);
    $categoryActive = mysqli_real_escape_string($con, $_POST['category_active']);
    

    $qry = $con->prepare('INSERT INTO category (category_name,description,active) VALUES (?,?,?);');
    if ($qry === false) {
        echo mysqli_error($con)." - ";
        exit(__LINE__);
    }
    $qry->bind_param('ssi', $categoryName, $categoryDescription, $categoryActive);
    if ($qry->execute() === false) {
        echo mysqli_error($con)." - ";
        exit(__LINE__);
    } else {
        echo "Category toegevoegd";
        header("Location: category_overzicht");
        $qry->close();
    }
}
?>