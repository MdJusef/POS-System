<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Product</title>
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
        
            <h2 class="text-center font-weight-bold">Product Data</h2>

            <?php
              //Database Connection
              //$connection=mysqli_connect('localhost','root','','pos_system');
              include('../connection.php');

              // query for retreiving data from table
              $query = "SELECT * FROM product order by p_id asc";
              $result=mysqli_query($conn,$query);
                  if($result)
                  {
                  if(mysqli_num_rows($result)>0){
                    echo "<table class='col-12 table table-bordered'>
                    <tr>
                        <td class='font-weight-bold'>
                            Product Id
                        </td>
                        <td class='font-weight-bold'>
                            Product Name
                        </td>
                        <td class='font-weight-bold'>
                            Product Price
                        </td>
                        <td class='font-weight-bold'>
                            Product Quantity
                        </td>
                        <td class='font-weight-bold'>
                            Product Image
                        </td>
                        <td class='font-weight-bold'>
                            Actions
                        </td>
                    </tr>
                    ";
                    while($ans=mysqli_fetch_array($result))
                    {
                                      echo "<tr>";
                                                  echo "<td>". $ans['p_id'] ."</td>";
                                                  echo "<td>". $ans['p_name'] ."</td>";
                                                  echo "<td>". $ans['p_price'] ." (Per KG)"."</td>";
                                                  echo "<td>". $ans['p_quantity'] ."</td>";
                                                  echo "<td>";
                                                  echo '<img height="130" width="150" src="data:image;base64,'.base64_encode($ans['p_image']).'">';
                                                  echo "</td>";
                                                  echo "<td>"."<button>"."Delete"."</button>"."</td>";
                                                  

                                      echo "</tr>";
                      }

                                echo "</table>";

                    }
                    }
                    mysqli_close($conn);

?>

        </div>
    </div>

</body>
</html>