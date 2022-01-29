
<?php
include('../connection.php');
$error = "";


if(isset($_POST['submit']))
{  
    $OperatorPassword = $_POST['operator_password'];
    $OperatorUsername = $_POST['operator_username'];
    $sql = "SELECT * FROM operator WHERE op_username = '$OperatorUsername' AND op_password ='$OperatorPassword'";
    $result = $conn->query($sql);
    if($result->num_rows!=0)
    {
        header("Location:opdashboard.php");
    }
    else
    {
        $error = "Wrong Password. Try again....";
        //header("Location: login.php");
        
    }
}
?>


<html>
    <head>

    </head>
    <title>POS System</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

<body>
    
<form method="POST">
    <br><br>
    
    <div class="login-form">
        <div class="row">
            
            <div class="col-md-6 offset-3">
                    <h2 class="text-center">Operator LOG IN</h2>

                    <p class="text-danger"><?php echo $error; ?></p>

                <div class="form-group pt-3" class="username">
                <label for="">Username:</label>
                <input class="form-control" type="text" name="operator_username" placeholder = "Enter Username">
                </div>

                <div class="form-group pt-3">
                <label for="">Password: </label>
                <input class="form-control" type="password" name="operator_password" placeholder = "Enter Password">
                </div>

                <div class="form-group pt-3">
                   <input type="submit" name="submit"value="login">
                </div>

            </div>
        </div>
    </div>
    
</body>
</html>

</form>

