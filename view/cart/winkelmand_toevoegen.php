<form action="" method="post">
<input type="number" name="quantity" id="quantity">
<input type="submit" value="submit" name="submit">
</form>    
<?php

session_start();

if(empty($_SESSION['cart'])){
    $_SESSION['cart'] = array(); 
}
if(isset($_POST['submit'])){
    array_push($_SESSION['cart'], $_GET['id']['quantity'] = $_POST['quantity']);

}



?>
<a href="winkelmand.php">.</a>