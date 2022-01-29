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
    <title>Add Operator</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>

<form action = "add_operator.php" method = "post">
    <div class="row">
        <div class="col-md-6 offset-md-3">

        <?php include('menu.php');?> <br><br>
    
            <h2 class="text-center"><b>Add Operator</b></h2>
  <div class="form-group pt-3">
    <label><b>Username:</b></label>
    <input type="text" class="form-control" placeholder="Enter username" name="op_username">
  </div>
  <div class="form-group pt-3">
    <label><b>Password:</b></label>
    <input type="password" class="form-control" placeholder="Password" name="op_password">
  </div>

  <button name="submit" type="submit" class="btn btn-primary mt-3">Submit</button>
  </div>
  </div>
 <br><br>
  <?php    
        if(isset($_POST['submit']))
        {
            $op_username = $_POST['op_username'];
            $op_password = $_POST['op_password'];

            $sql_1 = "SELECT * FROM operator WHERE  op_username='$op_username'";
                $result = $conn->query($sql_1);
                if($result->num_rows==0)
                {
                    $sql = "INSERT INTO operator(op_username,op_password) VALUES ('$op_username','$op_password')";
                    if($conn->query($sql)== TRUE)
                    {
                        echo "<p class='text-center'>new record create successfully<br><p>";
                    }
                }
                else
                {
                    echo "<p class='text-center text-danger'>Username is already exist<br><p>";    
                }
                
        }
        mysqli_close($conn);
            ?>

</form>


</body>
</html>