<?php

session_start();



if(isset($_POST['addCart'])){



    $product_name = $_POST['pName'];
    $product_price = $_POST['pPrice'];
    $product_quantity = $_POST['pQuantity'];
    $_SESSION['cart'][] = array('ProductName' => $product_name,
                        'ProductPrice' => $product_price,
                        'ProductQuantity' => $product_quantity);
    header("location: viewCart.php");
}


?>