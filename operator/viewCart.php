<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <title>View Cart</title>
</head>
<body>
    <?php include('menu.php'); ?>
<div class="col-8 offset-2">
<h1 class="text-center">Cart</h1>
    <div class="card-body">
        <table class='table'>
            <thead class='bg-danger text-white'>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Total Price</th>
            </thead>

             <?php
            session_start();
            $ptotal = 0;
            $total = 0;

            if(isset($_SESSION['cart'])){
                foreach($_SESSION['cart'] as $key => $value){
                    $ptotal = $value['ProductPrice'] * $value['ProductQuantity'];
                    $total += $value['ProductPrice'] * $value['ProductQuantity'];

                    echo "
                    <tr>
                    <td>$value[ProductName]</td>
                    <td>$value[ProductPrice]</td>
                    <td>$value[ProductQuantity]</td>
                    <td>$ptotal</td>
                    
                    </tr>
                    
                    
                    ";
                }
            }
                    echo "
                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><b>Total : $total</b></td>
                        </tr>
                        ";
                        //$sql = insert into
                        $_SESSION['total'] = $total;
            ?>
        </table>
        <form action="receipt.php" method = "POST">
            <a href="receipt.php">
            <input type="button" class="btn btn-primary" name = "submit" value = "Confirm"></a>

            <a href="purchase.php">
            <input type="button" class="btn btn-primary" value = "Add More Product"></a>
            
        </form>
 
    </div>
</div>
</body>
</html>