<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Operator</title>
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
            <?php include('menu.php');?>
            <br><br>
            <h2 class="text-center font-weight-bold">Operator Data</h2> <br><br>

            <?php
              //Database Connection
              $connection=mysqli_connect('localhost','root','','pos_system');

              // query for retreiving data from table
              $query = "SELECT * FROM operator";
              //$query="select * from students where numofcourse < 6 and ROWNUM>1 order by numofcourse asc ";
              $result=mysqli_query($connection,$query);
                  if($result)
                  {
                  if(mysqli_num_rows($result)>0){
                    echo "<table class='col-12 table table-bordered'>
                    <tr>
                        <td class='font-weight-bold'>
                            Username
                        </td>
                        <td class='font-weight-bold'>
                            Password
                        </td>
                        <td class='font-weight-bold'>
                            Actions
                        </td>
                    </tr>
                    ";
                    while($ans=mysqli_fetch_array($result))
                    {
                                      echo "<tr>";
                                                  echo "<td>". $ans['op_username'] ."</td>";
                                                  echo "<td>". $ans['op_password'] ."</td>";
                                                  echo "<td>"."<button class='btn btn-primary'>"."Delete"."</button>"."</td>";

                                      echo "</tr>";
                      }

                                echo "</table>";

                    }
                    }
                    

                                 ?>

        </div>
    </div>
</body>
</html>