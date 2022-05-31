<?php
include_once "./connection.php";
session_start();
$sessionUserId = $_SESSION['userID'];
$arr1 = array();
$finalTotal=0;
if(isset($_GET['order_num']))
{
  $sqlFkey="SET FOREIGN_KEY_CHECKS=0;"; // TO stop checking the forign key
  $result5=mysqli_query($conn,$sqlFkey);
  $dele = $_GET['order_num'];
  $sqlDelete="DELETE FROM cart WHERE order_number=$dele";
  $result3=mysqli_query($conn,$sqlDelete);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/f32d43040b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script&family=Lobster&family=Lora&family=Sacramento&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/bootstrap.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/cart.css?v=<?php echo time(); ?>">
    <title>Your Cart</title>
</head>
<body>
<nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="./img/projectimg/Lecia-logo.png" width="150px" height="auto" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" >
                <span class="navbar-toggler-icon" style="color: black;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            SHOP
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./ProductsPage/Dress.php">Dress</a></li>
                            <li><a class="dropdown-item" href="./ProductsPage/Suit.php">Suits</a></li>
                            <li><a class="dropdown-item" href="./ProductsPage/Accessories.php">Accessories</a></li>
                            <li><a class="dropdown-item" href="./ProductsPage/Men_shoes.php">Men Shoes</a></li>
                            <li><a class="dropdown-item" href="./ProductsPage/Women_shoes.php">Women Shoes</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./index.php#discount">Our discount</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about us/about_us.php"> About us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="#footer">
                            Contact us
                        </a>
                    </li>
                </ul>
                <form action="" method="post">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                    <!-- profile icon/login/register -->
                <?php
                          $check=0;
                          if(isset($_SESSION["userID"])){
                               $profile_icon= '
                               <a class="nav-link" href="./profile_page/user_profile.php">
                                   <i class="fa-solid fa-user"></i>
                               </a>';
                               $cart='
                               <a class="nav-link" href="./cart.php">
                               <i class="fa-solid fa-cart-shopping"></i>
                                 </a>'
                               ?>
                               <form action="" method='post'>
                           <li class="nav_item"><input class="nav-link" type="submit" name="logout" value=" Logout " style="border:none; background-color: white; cursor:pointer">
                                </li>
                                   </form>
                                  <?php if(isset($_POST['logout'])){
                                    session_destroy();
                                    echo'<script>
                                     setTimeout(() => {
                                         window.location = "index.php";
                                       })
                                     
                                     </script>';
                                  }
                          }
                          else{
                            echo '<li class="nav-item ">
                            <a class="nav-link " href="./loginPage/login.php">
                                Login </a> </li>';
                            echo '<li class="nav-item ">
                            <a class="nav-link " href="./registerPage/register.php">
                                Register </a> </li>';
                           }?>
                       <!-- <li class="nav-item">
                    </li> -->
                       <li class="nav-item">
                          <?php if(isset( $profile_icon)){echo $profile_icon;}?>
                       </li>
                      <li class="nav-item">
                          <?php if(isset( $cart)){echo $cart;}?>
                      </li>
                </ul>
                </form>
            </div>
        </div>
    </nav>
<table class="table table-bordered text-center">
  <thead>
    <tr>
      <th scope="col">Order Number</th>
      <th scope="col">Product  Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Color</th>
      <th scope="col">Quanity</th>
      <th scope="col">Subtotal</th>
      <th scope="col">Delete Item</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $total=1;
      $sql="SELECT * FROM cart";
      $result=mysqli_query($conn,$sql);
      $result_check=mysqli_num_rows($result);
      if($result_check > 0){
          while ($row= mysqli_fetch_assoc($result)) {
            if (isset($_POST["submit"])){
            //   echo strval($row['order_number']);
            //  echo gettype(strval($row['order_number']));
              $ordernum= $row['order_number'];
              $updateOrderQuantity=$_POST[$row['order_number']];
              if(isset($updateOrderQuantity)){
                $update_data2 = "UPDATE cart SET order_quantity= '$updateOrderQuantity' WHERE order_number = $ordernum;";
                $updateDataQuery=mysqli_query($conn,$update_data2);
              }
              else{
              $OrderQuantity=$row['order_quantity'];
              $ordernum = $row['order_number'];
              $update_data2 = "UPDATE cart SET order_quantity= '$OrderQuantity' WHERE order_number = $ordernum;";
              $updateDataQuery=mysqli_query($conn,$update_data2);
          }            
          echo'<script>
          setTimeout(() => {
              window.location = "cart.php";
            }, "0")
          </script>';
          }
              $total=$row['order_price']*$row['order_quantity'];
              echo "<tr>";
              echo "<form method='post'>";
              echo "<td>". $row['order_number']. "</td>";
              echo "<td> <img src='".$row['product_image']."' height='100px' width='100px'>. </td>";
              echo "<td>". $row['product_name']. "</td>";
              echo "<td>". $row['order_price']. "</td>";
              echo "<td>". $row['product_color']. "</td>";
              echo "<td> <input type='number' class='updateInput' name='".$row['order_number']."' value='".$row['order_quantity']."'>
              <br>
              <br>
               <input type='submit' name='submit' class='btn btn-primary btn-sm cart_btn' value='Update'></a>
              </td>";
              $arr1[$row['order_number']]=$row['order_quantity'];
              echo "<td>". $total. "</td>";
              echo "<td>
               <a href='cart.php?order_num=".$row['order_number']."'><input class='deleteInput' type='button' name='".$row['order_number']."'> <li class='fa-solid fa-trash-can cart_icon'></li></a>
              </td>";
              echo "</form>";
               echo "</tr>";
              $productId=$row['product_id'];
              $orderNumber=$row['order_number'];
              $productQuantity= $row['order_quantity'];
            if(isset($_POST['checkout'])){
              $totalInsert="INSERT INTO checkout (user_id,product_id,order_number,order_quantity,order_subtotal,total) VALUES ('$sessionUserId','$productId','$orderNumber','$productQuantity','$total','$finalTotal');";
              $result3=mysqli_query($conn,$totalInsert);
              echo $result3;
              unset($_SESSION['total']);
              echo'<script>
              setTimeout(() => {
              window.location = "./checkoutpage/checkout.php";
              })                        
              </script>';   
          }
           $finalTotal= $finalTotal +$total;
          }
      }
      $_SESSION['total']= $finalTotal;
      ?>
  </tbody>
</table>
    <form method="post" class="toCheckOut">
      <!-- <h3>
        <?php
          echo 'Total: '. $finalTotal;
        ?>
       </h3> -->
      <div class="card">
        <h5 class="card-header">Cart totals</h5>
        <div class="card-body">
          <p class="card-text">Your <b>total</b> price is: <h3>
          <?php
          echo $finalTotal. ' JOD';
          ?>
          </h3> Approve your order by clicking the <b>Checkout</b> button</p></h3>
          <br>
          <button type="submit" class="btn btn-sm cart_btn" name="checkout">Checkout</button>
        </div>
      </div>  
    </form>
    <br>
    <div class="clearfix"></div>
    <!-- Footer -->
    <div class="footer-clean" style="margin-top: 70px;" >
        <footer id="footer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Our Team</h3>
                        <ul>
                            <li><a href="#"> <h6>Ibrahim</h6> </a></li>
                            <li><a href="#"> <h6>Raghad</h6> </a></li>
                            <li><a href="#"> <h6>Hadi</h6> </a></li>
                            <li><a href="#"> <h6>Aya</h6> </a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3 id="contact">Contact US</h3>
                        <ul>
                            <li><a href="https://Ibrahim Al tameme@gmail.com">Ibrahim Al tameme@gmail.com</a></li>
                            <li><a href="https://raghad.karasneh@gmail.com">raghad.karasneh@gmail.com</a></li>
                            <li><a href="hadialsaden@gmail.com">hadialsaden@gmail.com</a></li>
                            <li><a href="https://ayaalsawa279@gmail.com">ayaalsawa279@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3 style="text-align:center;">STYLE IS A WAY TO SAY WHO YOU ARE WITHOUT HAVING TO SPEAK</h3>
                    </div>
                    <div class="col-lg-3 item social">
                        <a href="https://web.facebook.com/eliesaabworld/?_rdc=1&_rdr" target="_blank"><i class="icon ion-social-facebook"></i></a>
                        <a href="https://twitter.com/ElieSaabWorld?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="icon ion-social-twitter"></i></a>
                        <a href="https://www.snapchat.com/add/eliesaablive" target="_blank"><i class="icon ion-social-snapchat"></i></a>
                        <a href="https://www.instagram.com/accounts/login/?next=/eliesaabworld/" target="_blank"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">Company Name Â© 2022</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
   <!--for delete items: <li class='fa fa-xmark'></li> -->
  </body>
</html>

