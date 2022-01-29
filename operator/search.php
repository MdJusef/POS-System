<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col md-5 text-center">
          <h2 class="m-5 font-weight-bold">Search Results</h2>
          <?php
          $connection=mysqli_connect('localhost','root','','pos_system');
          if($_SERVER["REQUEST_METHOD"] == "POST")
          {
            $p_name = mysqli_real_escape_string($connection,$_POST['searchuser']);
            $query="select * from product where p_name = '$p_name'";
            $result=mysqli_query($connection,$query);
              if($result)
              {
                    while($ans=mysqli_fetch_array($result)){
                        
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
            }
                else
                echo "No Result Found";
                  
              mysqli_close($connection);
        }
                             ?>

            <br><br> <a href="opdashboard.php"> <button class="btn btn-primary"> GO BACK TO HOME PAGE</button> </a>

        </div>
      </div>
    </div>
  </body>
</html>