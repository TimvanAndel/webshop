<?php
function addProduct(){
    global $con;


    $target_dir = "../../assets/img";
    $uploadOk = 1;

    if(isset($_POST["submit"])||!empty($_FILES["fileToUpload"]["name"])) {
        $target_file =$target_dir.basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            $check["mime"];
            $uploadOk = 1;
            if (file_exists($target_file)) {
                echo "File already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

                } else {
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "Only JPG, JPEG & PNG files are allowed.";
                $uploadOk = 0;
            }
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
    }}



    $productName = mysqli_real_escape_string($con, $_POST['product_name']);
    $productDescription = mysqli_real_escape_string($con, $_POST['product_description']);
    $productCategory = mysqli_real_escape_string($con, $_POST['product_category']);
    $productPrice = mysqli_real_escape_string($con, $_POST['product_price']);
    $productColor = mysqli_real_escape_string($con, $_POST['product_color']);
    $productWeight = mysqli_real_escape_string($con, $_POST['product_weight']);
    $productActive = mysqli_real_escape_string($con, $_POST['product_active']);
    $imageName = mysqli_real_escape_string($con, $_FILES["fileToUpload"]["name"]);
    
    
    $qry = $con->prepare('INSERT INTO product (name, description, category_id, price, color, weight, active) VALUES (?,?,?,?,?,?,?);') ;
    if ($qry === false) {
        echo mysqli_error($con)." - ";
        exit(__LINE__);
    }
    $qry->bind_param('ssisssi', $productName, $productDescription, $productCategory, $productPrice, $productColor, $productWeight, $productActive) ;
    if ($qry->execute() === false) {
        echo mysqli_error($con)." - ";
        exit(__LINE__);
    } else {

        echo "Product toegevoegd";

        $qry->close();
        // 
        // 
        // 

        $qrySelect = $con->query("SELECT id, name FROM product WHERE name = $productName") or die($con->error);
        $resultSelect = $qrySelect->fetch_assoc();

        $qryImage = $con->prepare('INSERT INTO product_image (product_id, image, active) VALUES (?,?,?);');
        if ($qryImage === false) {
            echo mysqli_error($con)." - ";
            exit(__LINE__);
        }
        $qryImage->bind_param('isi', $resultSelect['id'], $_FILES["fileToUpload"]["name"], $productActive);
        if ($qryImage->execute() === false) {
            echo mysqli_error($con)." - ";
            exit(__LINE__);
        } else {
            echo "img toegevoegd";
        // header("Location: product_overzicht.php");
        } 

    }


    

}


?>