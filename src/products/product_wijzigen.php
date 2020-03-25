<?php
function updateProduct(){
    global $con;
    
    $productName = mysqli_real_escape_string($con, $_POST['product_name']);
    $productDescription = mysqli_real_escape_string($con, $_POST['product_description']);
    $productCategory = mysqli_real_escape_string($con, $_POST['product_category']);
    $productPrice = mysqli_real_escape_string($con, $_POST['product_price']);
    $productColor = mysqli_real_escape_string($con, $_POST['product_color']);
    $productWeight = mysqli_real_escape_string($con, $_POST['product_weight']);
    $productActive = mysqli_real_escape_string($con, $_POST['product_active']);


    $query1 = $con->prepare("UPDATE product SET name = ?, description = ?, category_id = ?, price = ?, color = ?, weight = ?, active = ?  WHERE id = ? LIMIT 1;");
    if ($query1 === false) { 
      echo mysqli_error($con)." - ";
        exit(__LINE__);
    }
    
    $query1->bind_param('ssisssii',$productName, $productDescription, $productCategory, $productPrice, $productColor, $productWeight, $productActive, $_GET['id']);
    if ($query1->execute() === false) { 
        echo mysqli_error($con)." - ";
        exit(__LINE__);
    } else {
        echo "Product geupdate";
        header("Location: product_overzicht.php");
        $query1->close();
        
    }
}

?>
