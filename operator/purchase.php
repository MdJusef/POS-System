<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Product</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

<?php
    //Database Connection
    $connection=mysqli_connect('localhost','root','','pos_system');

    // query for retreiving data from table
    $query = "SELECT p_name,p_price,p_image,p_quantity FROM product order by p_price asc";
    $result=mysqli_query($connection,$query);
?>
<?php include('menu.php'); ?>
    <br><br><br>

    <div class="container">
        <div class="row">

            <div class="col-12 card-group">
                <div class="col-12 row">
                    <div class="col-6">
                        <h3>Purchase Your Product</h3>
                    </div>
                    
                    <div class="col-6">
                    <form action="search.php" method="POST">
                        <div class="input-group" style="justify-content:flex-end">
                            <div class="form-inline">

                                <input name="searchuser"  type="search" id="form1" class="form-control" />
                            </div>
                            <button name="search" value = "search" type="submit" class="btn btn-primary">Search</button>
                        </div>
                        <br>
                        </form>
                    </div>
                   

                </div>
                <?php
                    while($ans=mysqli_fetch_array($result)){
                       // echo "<form action = 'insertcart.php' method = 'POST'";
                        echo "<div class='col-3'>";
                        echo "<div class='card'>";
                        echo "<form action='addCart.php' method='POST'>";
                        echo '<img style="width: 100px;height: 100px;" src="data:image/jpeg;base64,'.base64_encode( $ans['p_image'] ).'"/>';
                            echo "<div class='card-body'>";
                                echo "<p class='card-text'>" . "Product Name: " . $ans['p_name'] . "</p>";
                                echo "<p class='card-text'>" . "Price :" . $ans['p_price'] . " taka" . "</p>";

                                echo "<input type = 'hidden' name = 'pName' value = '$ans[p_name]' >"; //pass data
                                echo "<input type = 'hidden' name = 'pPrice' value = '$ans[p_price]' >";
                                echo "<input type = 'number' name = 'pQuantity' value = ' min = '1' max = '100' ' placeholder='Quantity'>" . "<br>" . "<br>";
    
                                echo "<input type='submit' name='addCart' value = 'Add To Cart'  class='btn-primary text-white'>";
                             echo "</div>";
                             echo "</form>";
                        echo "</div>";
                     echo "</div>";

                }
                ?>

             </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>