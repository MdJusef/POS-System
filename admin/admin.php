<html>
    <head>

    </head>
    <title>POS System</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

<body>
<form action="dashboard.php"method="post">
    <br><br>
    <div class="login-form">
        <div class="row">
            
            <div class="col-md-6 offset-3">
                    <h2 class="text-center">LOG IN</h2>
                <div class="form-group pt-3" class="username">
                <label for="">Username:</label>
                <input class="form-control" type="text" name="admin_name" placeholder = "Enter Username">
                </div>

                <div class="form-group pt-3">
                <label for="">Password: </label>
                <input class="form-control" type="password" name="admin_password" placeholder = "Enter Password">
                </div>

                <div class="form-group pt-3">
                    <button class="btn btn-primary mt-3" name="add">Submit</button>
                </div>

            </div>
        </div>
    </div>

</form>
    </body>
    </html>
