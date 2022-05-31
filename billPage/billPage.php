<?php
session_start();
include_once "../connection.php";
//$add_sales="INSERT INTO sales (ord_num,user_id,toatl)";
$total=$_SESSION['total'];
$user_id=$_SESSION['userID'];

// $sql1="SELECT * FROM cart WHERE user_id={$_SESSION['userID']}";
// $result= mysqli_query($conn , $sql1);
// $result_check= mysqli_num_rows($result);

// if ($result_check > 0) {
//     while($row=mysqli_fetch_assoc($result)){

//         $items=$row['product_name'].'  x '. $row['order_quantity'];
//         $itemprice=$row['order_price'] * $row['order_quantity'];
    
//         echo  "<div class='d-flex justify-content-between mt-2'>";
//         echo "<span>".'$'.$items. "</span>";
//         echo "<span>".'$'.$itemprice. "</span>";
    
    
//       echo "</div>";

    
//     }}

?>

<!DOCTYPE html>
<html lang="en">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/bootstrap.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../css/singleProduct.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
       
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script&family=Lobster&family=Lora&family=Sacramento&display=swap"
            rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/bill.css">
       
        <script src="https://kit.fontawesome.com/f32d43040b.js" crossorigin="anonymous"></script>
    
    </head>
<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../img/projectimg/logo.png" width="150px" height="auto" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" >
                <span class="navbar-toggler-icon" style="color: black;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            SHOP
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../ProductsPage/Dress.php">Dress</a></li>
                            <li><a class="dropdown-item" href="../ProductsPage/Suit.php">Suits</a></li>
                            <li><a class="dropdown-item" href="../ProductsPage/Accessories.php">Accessories</a></li>
                            <li><a class="dropdown-item" href="../ProductsPage/Men_shoes.php">Men Shoes</a></li>
                            <li><a class="dropdown-item" href="../ProductsPage/Women_shoes.php">Women Shoes</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../index.php#discount">Our discount</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about us/about_us.php"> About us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="../index.php#contact">
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
                               <a class="nav-link" href="../profile_page/user_profile.php">
                                   <i class="fa-solid fa-user"></i>
                               </a>';
    
                               $cart='
                               <a class="nav-link" href="../cart.php">
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
                                         window.location = "../index.php";
                                       })
                                     
                                     </script>';
                               
                                  }
    
                          }else
                           
                           { echo '<li class="nav-item ">
                            <a class="nav-link " href="../loginPage/login.php">
                                Login </a> </li>';
    
                            echo '<li class="nav-item ">
                            <a class="nav-link " href="../registerPage/register.php">
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
  <div class="container bill">
  <!-- <h1 class="text-center">Thank You :)</h1> -->
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-lg-4 img">
      <img src="../img/projectimg/thankyou.png" class="img-fluid rounded-start" alt="Thank you">
    </div>
    <div class=" col-lg-6">
      <div class="card-body">
        <h3 class="card-title">Thank you for visiting us</h3>
        <?php
        $sqlBringBillData="SELECT * FROM billing_history WHERE user_id='$user_id';";
        $resultBringBillData=mysqli_query($conn,$sqlBringBillData);
        while($rowBill=mysqli_fetch_assoc($resultBringBillData)){
            $billNum= $rowBill['billing_number'];
        }
        $addBillNum="INSERT INTO checkout bill_id VALUE $billNum WHERE user_id='$user_id';";
        $sqlAddBillNum=mysqli_query($conn,$addBillNum);
        $sqlBringData="SELECT * FROM checkout WHERE bill_id='$billNum'";
        $resultBringData=mysqli_query($conn,$sqlBringData);
        // print_r($resultBringData);
        while($rowData=mysqli_fetch_assoc($resultBringData)){
            $userFirstName= $rowData['first_name'];
            $userLastName= $rowData['last_name'];
            $userCountry=$rowData['country'];
            $userState=$rowData['state'];
            $userCity=$rowData['city'];
            $userStreet=$rowData['street_address'];
            $userZipcode=$rowData['zipcode'];
            $userPhone=$rowData['phone'];
            $userEmail=$rowData['order_email'];
            $orderDate=$rowData['created_at'];
            
        $add_sales="INSERT INTO sales (ord_num,user_id,total) VALUES ($billNum,$user_id,$total)";
        $sqlSales=mysqli_query($conn,$add_sales);
        //echo $userFirstName;
        } ?>
        <h6 class="card-text">Your bill number: <b>624<?php echo $billNum;?></b></h6>
        <br>
        <h6 class="card-text">Your Name: <?php echo $userFirstName. ' '.$userLastName;?></h6>
        <br>
        <h6 class="card-text">Your Location: <?php echo $userCountry. '- '.$userState. '- '.$userCity.
        '<br>'.
        $userStreet.' zipcode: '.$userZipcode;
        ;?></h6>
        <br>
        <h6 class="card-text">Your Phone Number: <?php echo $userPhone;?></h6>
        <br>
        <h6 class='card-text'>Your purchases:</h6>
        <p>
        <?php
           $sqlItem="SELECT * FROM cart WHERE user_id={$_SESSION['userID']}";
           $resultItem= mysqli_query($conn , $sqlItem);
           $result_checkItem= mysqli_num_rows($resultItem);
           
           if ($result_checkItem > 0) {
               while($rowItem=mysqli_fetch_assoc($resultItem)){
           
                   $items=$rowItem['product_name'].'  x '. $rowItem['order_quantity'];
                   $itemprice=$rowItem['order_price'] * $rowItem['order_quantity'];
               
                   echo  "<div class='d-flex justify-content-between mt-2'>";
                   echo $items. " </span>";
                   echo "<span>".$itemprice. " JOD</span>";
               
               
                 echo "</div>";}}
                 
                 
        ?>
        </p>
        <br>
        <h6 class="card-text">Total Price: <?php echo $total.' JOD';?></h6>
        <br>
        <h6 class="card-text">Order Date & Time: <?php echo $orderDate;?></h6>
        <br>
        <p class="card-text"><small class="text-muted">Please feel free to contact us :)</small></p>
      </div>
    </div>
  </div>
</div>
 
  </div>
    <?php 
    $sqlDelete="TRUNCATE TABLE `cart`"; //To clear cart
    $sqlResult=mysqli_query($conn,$sqlDelete);
    ?> 
</body>
</html>