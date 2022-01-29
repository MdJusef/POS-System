<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
<div class="row">
    <div class="col-md-6 offset-md-3">



    <?php
        if(isset($_POST['add']))
        {
            if($_POST['admin_name']=="admin" && $_POST['admin_password'] == "1234")
            {

                echo " 
                <br><br>
                <h2 class='text-center'>Login Successfull</h2>
                <h2 class='text-center'>Welcome To Admin Panel</h2>
                <br><br>
                <div class='container'>
            <div class='main-body'>
    
          <!-- Breadcrumb -->
          <nav aria-label='breadcrumb' class='main-breadcrumb'>
            <ol class='breadcrumb'>
                
                <li class='breadcrumb-item'><a href='add_operator.php'>Add Operator</a></li>
                <li class='breadcrumb-item'><a href='add_product.php'>Add Product</a></li>
                <li class='breadcrumb-item'><a href='show_operator.php'>Show Product</a></li>
                <li class='breadcrumb-item'><a href='show_operator.php'>Show Operator</a></li>
                <li class='breadcrumb-item'><a href='../index.php'>Log Out</a></li>

            </ol>
          </nav>
          <!-- /Breadcrumb -->
          
    </div>
</div>        
                
                ";
            }
            else{
            echo "Wrong Password or username.... try again.";
            echo "
                <a href='admin.php'><button>Go back to Login Page</button></a>
            ";
            }
        }
    ?>
        </div>
</div>   
</body>
</html>