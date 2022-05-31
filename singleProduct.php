<?php
include_once "./connection.php";
//Bring the product id from database
session_start();
//DELETE LATER
$productId=$_GET['id'];
// echo $productId;
$sql1="SELECT * from products WHERE product_id='$productId'"; //WHER product_id=$_POST['product_id'];";
$result= mysqli_query($conn , $sql1);
$result_check= mysqli_num_rows($result);
$sql2="SELECT * from user;"; //WHER product_id=$_GET['product_id'];
$result2= mysqli_query($conn , $sql2);
$result_check2= mysqli_num_rows($result2);
if ($result_check > 0) {
    while ($row=mysqli_fetch_assoc($result) ) {
        $product_id=$row['product_id'];
        $product_image= $row['product_image'];
        $product_name = $row['product_name'];
        $product_category=$row['product_category'];
        $product_price=$row['product_price'];
        $product_quantity=$row['product_quantity'];
        $product_color=$row['product_color'];
        $product_size=$row['product_size'];
        $product_description=$row['product_description'];
        //TO add user information
        while($row2=mysqli_fetch_assoc($result2)){
        $user_id=$row2['user_id'];
        $first_name=$row2['user_first_name'];
        $last_name=$row2['user_last_name'];
        }
    }
}
//Comment
if(isset($_POST['submit2'])){
$comment= $_POST['comment'];
$sql3="INSERT INTO comments (product_id, user_id, user_first_name, user_last_name, product_comment) VALUES ('$product_id','$user_id','$first_name','$last_name','$comment');";
$result3= mysqli_query($conn , $sql3);
$sql4="SELECT * FROM comments WHERE product_id='$product_id';";
$result4= mysqli_query($conn , $sql4);
$result_check4= mysqli_num_rows($result4);
    if ($result_check4 > 0) {
        while ($row4=mysqli_fetch_assoc($result4)) {
            $commentShow=$comment;
        }
    }  
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/singleProduct.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script&family=Lobster&family=Lora&family=Sacramento&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://kit.fontawesome.com/f32d43040b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./product.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>
<body>
<nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="./img/projectimg/logo.png" width="150px" height="auto" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: black;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="./index.php">Home</a>
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
                        <a class="nav-link " href="index.php#discount">Our discount</a>
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
                            <li class="nav_item"><input class="nav-link" type="submit" name="logout" value=" Logout "
                                    style="border:none; background-color: white; cursor:pointer">
                            </li>
                        </form>
                        <?php if(isset($_POST['logout'])){
                                    session_destroy();
                                    echo'<script>
                                     setTimeout(() => {
                                         window.location = "./index.php";
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
    <div class="container">
        <div class="row singleProductDesc">
            <!--Product Image-->
            <div class="col-lg-6 text-center">
                <img src="<?php echo  $product_image;?>" alt="" height="auto" width="60%" class="singleProductImage">
            </div>
            <!--Product Name & Description-->
            <div class="col-lg-6 singleProductDesc">
                <?php
                echo "<h3>". $product_name. "</h3>";
                echo "<br>";
                echo "<h6><b>". $product_price. "JOD </b></h6>";
                echo "<p class='product_color'> <b>Color</b>: ". $product_color. "</p>";
                //echo "<p>". $product_description. "</p>";
                ?>
                <div class="col-lg-12 categories">
                    <p><b>Categories</b>: <?php echo $product_category?></p>
                </div>
                <div class="row singleProductDesc-divider">
                    <form method="post" class="firstForm">
                        <div class="col-lg-12">
                            <label>Quantity</label> <input type='number' name='quantity' value='1' class="quantityInput text-center"> 
                                <?php if($product_category == "Men's Shoes" || $product_category == "Women's shoes")
                        {?>
                            <label>Size</label>
                            <select name="size" class="text-center">
                                <option value="38">38<option>
                                <option value="39">39<option>
                                <option value="49">49<option>
                                <option value="41">41<option>
                            </seclect>
                    <?php
                        }
                        else{
                    ?>
                            <label>Size</label>
                            <select name="size" class="text-center">
                                <option value="S">S<option>
                                <option value="M">M<option>
                                <option value="L">L<option>
                                <option value="XL">XL<option>
                            </seclect>
                    <?php }?>
                        </div> 
                        <div class="col-lg-12 btn">
                            <input type="submit" name='submit' class="btn btn-s addToCart" value="Add To Cart">
                        </div>
                    <?php
                            if(isset($_POST['submit'])){
                                if(isset($_SESSION['userID'])){
                                    if(!empty($_POST['quantity']) && !empty($_POST['size'])){
                                        $updated_quantity=$_POST['quantity'];
                                        $updated_size=$_POST['size'];
                                        $quantitySql="INSERT INTO cart (user_id,product_id,product_image ,product_name, product_color, order_price, product_size, order_quantity) VALUES ('$user_id','$product_id','$product_image' ,'$product_name', '$product_color', '$product_price','$updated_size', '$updated_quantity');";
                                        $resultQuantity= mysqli_query($conn , $quantitySql);
                                        echo '<br>';
                                        echo '<div class="alert alert-success d-flex justify-content-center" role="alert">
                                        The item has been added successfully to the cart</div>';
                                    }
                                }
                                else{
                                    header("Location: ./loginPage/login.php");
                                }
                        }
                    ?>
                        <div class="col-lg-12 productDesc">
                            <h4> Product Description</h4>
                        <?php echo "<p>". $product_description. "</p>"; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Comment Section-->
     <br>
     <div class="row">
            <div class="col-lg-8 commentsSection">
                <form method="post">
                    <div class="col-lg-12">
                    <span class="sub-span text-center">Reviews</span>
                    <!-- To show all comments-->
                    <?php
                    $sql5="SELECT user_first_name, user_last_name, product_comment FROM comments WHERE product_id='$product_id';";
                    $result5= mysqli_query($conn , $sql5);
                    $result_check5= mysqli_num_rows($result5);
                    $id=1;
                    while ($row5=mysqli_fetch_assoc($result5)){
                        echo "<div class='old-comment-container'>";
                        echo "<img src=img/projectimg/profilePic.png class='profilePic'>";
                        // echo $id.'- ';
                        echo "<div class='comment-container'>";
                        echo "<span class='userName-comment'>";
                        echo ' '.$row5['user_first_name'].' ';
                        echo $row5['user_last_name'];
                        echo "</span>";
                        echo '<br>';
                        echo "<h5 class='userComment-comment'>". $row5['product_comment']. "</h5>";
                        echo "</div>";
                        echo "</div>";
                        echo '<br>';
                        $id++;
                    }
                    unset($_SESSION['product']);
                     ?>
                     </div>
                     <div class="col-lg-6 add-new-comment">
                     <img src=img/projectimg/profilePic.png class='profilePic'>
                     <div class='comment-container new-comment'>
                     <!-- <span class="main-span">Leave a Comment</span> -->
                        <textarea placeholder="Leave a Comment..." name="comment"></textarea>
                        <!-- <div class="oldCommentsContanier">
                     </div> -->
                    </div>
                    </div>
                    <button type="submit" name="submit2" class="btn newCommentBtn btn-lg">Submit</button>
                </form> 
                <!-- comment -->
            </div>
            <div class="col-lg-4 card shadow-none leica-pic" style="border: 1px solid white;">
                <!-- <h2>Leica<h2>
                    <h5>The only place you can find the most luxurious clothes, shoes and accessories which specially made in France in the highest quality and the latest models. In addition to:
                        <ol type="1">
                            <li>Free shiping</li>
                            <li>45 Days return</li>
                            <li>Cash on delivery</li>
                            <li>The best customer service EVER</li>
                        </ol>
                    </h5> -->
                </div>   
    </div>
</div>   <div class="clearfix"></div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>