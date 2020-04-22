<?php
function setFormData(){
    global $con;

    if(isset($_POST['submit_payment'])){


        $firstName = $con->real_escape_string($_POST['firstName']);
        $middleName = $con->real_escape_string($_POST['middleName']);
        $lastName = $con->real_escape_string($_POST['lastName']);


        $street = $con->real_escape_string($_POST['street']);
        $houseNumber = $con->real_escape_string($_POST['houseNumber']);
        $houseNumber_addon = $con->real_escape_string($_POST['houseNumber_addon']);
        $city = $con->real_escape_string($_POST['city']);
        $zipCode = $con->real_escape_string($_POST['zipCode']);


        $email = $con->real_escape_string($_POST['email']);
        $phone = $con->real_escape_string($_POST['phone']);
        
        $price = $con->real_escape_string($_POST['price']);
        $paymentmethod = $con->real_escape_string($_POST['paymethod']);

        if($_POST['paymethod'] == 'achteraf'){
            $paid = false;
            $paid = $con->real_escape_string($paid);
        } else {
            $paid = true;
            $paid = $con->real_escape_string($paid);
        }

        $delivery = "bezorgen_thuis";
        $delivery = $con->real_escape_string($delivery);


        $date = date("Y-m-d H:i:s");
        $date = $con->real_escape_string($date);

        if(isset($_SESSION['loggedin_customer'] ) && $_SESSION['loggedin_customer'] == true){

        $customer_id = $con->real_escape_string($_SESSION['customer_id']);
        } else {

            $customer_id = $con->real_escape_string('0');
        }

        $query1 = $con->prepare('INSERT INTO tbl_order (customer_id, date, street, houseNumber, houseNumber_addon, zipCode, city, country, payment_method, paid, delivery) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');
        if ($query1 === false) {
            echo mysqli_error($con)." - ";
            exit(__LINE__);
        }

        if(isset($_SESSION['loggedin_customer'] ) && $_SESSION['loggedin_customer'] == true){
            $query1->bind_param('ississsssis', $customer_id, $date, $street, $houseNumber, $houseNumber_addon, $zipCode, $city, $phone, $paymentmethod, $paid, $delivery);
        } else {
            $query1->bind_param('ississsssis', $customer_id, $date, $street, $houseNumber, $houseNumber_addon, $zipCode, $city, $phone, $paymentmethod, $paid, $delivery);
        }

        if ($query1->execute() === false) {
            echo mysqli_error($con)." - ";
            exit(__LINE__);
        } else {
            // echo "Order toegevoegd";
            $query1->close();

            $order_id = $con->insert_id;

            foreach($_SESSION['cart']['producten'] as $key => $product){
                $productname = $product['titel'];
                $qrySELECT = $con->query("SELECT * FROM product WHERE name= '$productname'")  or die($con->error);
                
                $resultSELECT = $qrySELECT->fetch_assoc();

                $product_id = $resultSELECT['id'];

                $query2 = $con->prepare('INSERT INTO tbl_order_detail (order_id, product_id) VALUES (?, ?);');
                if ($query2 === false) {
                    echo mysqli_error($con)." - ";
                    exit(__LINE__);
                }
                $query2->bind_param('ii', $order_id, $product_id);
                if ($query2->execute() === false) {
                    echo mysqli_error($con)." - ";
                    exit(__LINE__);
                } else {
                // echo "hi";
                $query2->close();
                header("Location: ../../");

                }

            }
            
        }
    }



}
?>