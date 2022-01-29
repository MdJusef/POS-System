<?php
//Database Connection
include('../connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>

<form action = "op_add_product.php" method = "post" enctype="multipart/form-data">
    <div class="row">
    
        <div class="col-md-6 offset-md-3">
        <?php include('menu.php'); ?>
        <br><br>
        
            <h2 class="text-center"><b>Add Product</b></h2>
    <div class="form-group pt-3">
    <label><b>Product Id:</b></label>
    <input type="text" class="form-control" placeholder="Enter Product Id" name="p_id">
    </div>
  <div class="form-group pt-3">
    <label><b>Product Name:</b></label>
    <input type="text" class="form-control" placeholder="Enter Product Name" name="p_name">
  </div>
  <div class="form-group pt-3">
    <label><b>Product Price:</b></label>
    <input type="number" class="form-control" placeholder="Enter Price per kg" name="p_price">
  </div>
  <div class="form-group pt-3">
    <label><b>Product Quantity:</b></label>
    <input type="number" class="form-control" placeholder="Enter Quantity" name="p_quantity">
  </div>
  <div class="form-group pt-3">
    <label><b>Product Image:</b></label>
    <input type="file" class="form-control" placeholder="Upload Product Image" name="p_image">
  </div>

  <button name="upload" type="submit" value = "Upload Image/Data" class="btn btn-primary mt-3">Submit</button>
  </div>
  </div>
 <br><br>
  <?php    
        if(isset($_POST['upload']))
        {

            $p_id = $_POST['p_id'];
            $p_name = $_POST['p_name'];
            $p_price = $_POST['p_price'];
            $p_quantity = $_POST['p_quantity'];
            $p_image = addslashes(file_get_contents($_FILES["p_image"]["tmp_name"]));

            $sql_1 = "SELECT * FROM product WHERE  p_id='$p_id'";
                $result = $conn->query($sql_1);
                if($result->num_rows==0)
                {
                    $sql = "INSERT INTO product(p_id,p_name,p_price,p_quantity,p_image) VALUES ('$p_id','$p_name','$p_price','$p_quantity','$p_image')";
                    if($conn->query($sql)== TRUE)
                    {
                        echo "<p class='text-center'>new record create successfully<br><p>";
                    }
                }
                else
                {
                    echo "<p class='text-center'>Product is already exist... try another product<br><p>";    
                }
                
        }
            ?>

</form>


</body>
</html>