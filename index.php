<?php
include_once "./connection.php";

session_start();

if(isset($_SESSION["userID"])){
  $user_id=$_SESSION["userID"];
  
}


$sql_landing="SELECT * FROM products ;";
$result = $conn->query($sql_landing);
$result_check4= mysqli_num_rows($result);

// check result
if($result_check4 > 0){

    while($row=mysqli_fetch_assoc($result)){

       
        $product_id=$row['product_id'];
        $_SESSION["productID"]= $product_id;

    
    }}

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
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
 

    <script src="https://kit.fontawesome.com/f32d43040b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/style.css">


    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg ">
        <div class="container">


            <a class="navbar-brand" href="#"><img src="./img/projectimg/Lecia-logo.png" width="150px" height="auto"  alt=""></a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: black;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                        <a class="nav-link " href="#discount">Our discount</a>
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
                                 </a>';
                               
                               
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
                                         window.location = "index.php";
                                       })
                                     
                                     </script>';
                               
                                  }

                          }else
                           
                           { echo '<li class="nav-item ">
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


    <!-- ============================================== -->
    <section class="main">
        <div class="container py-5">
            <div class="row py-4">
                <div class="col-lg-7 pt-5 text-center">
                    <h1 class="pt-5" style="margin-top:25% ;">Luxury is in each detail</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- =================================================== -->



    <section class="benefit my-5 pd-5">
        <div class="container mt-5 py-5">
            <div class="text-center">
                <h1> Our Features</h1>
                <hr class="mx-auto mb-5 line" style="width: 30px;
        height: 2px;
        background-color: #c20f1e95;">
            </div>

            <div class="row benefit_row pt-4" style="background-color:rgba(0, 0, 0, 0.578)">

                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-item-center">
                        <div class="benefit_icon">
                            <i class="fa-solid fa-truck" aria-hidden="true"></i>
                        </div>
                        <div class="benefit_content">
                            <h6>
                                Free Shiping

                            </h6>
                            <p> Suffered Alteration is Some Form</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-item-center">
                        <div class="benefit_icon">
                            <i class="fa-solid fa-arrow-rotate-left" aria-hidden="true"></i>

                        </div>
                        <div class="benefit_content">
                            <h6>
                                45 days return

                            </h6>
                            <p> Making it look like Readable</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-item-center">
                        <div class="benefit_icon">
                            <i class="fa-solid fa-money-bill-1 " aria-hidden="true"></i>

                        </div>
                        <div class="benefit_content">
                            <h6>
                                Cash on delivery

                            </h6>
                            <p> The Internet tend To Repeat</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-item-center">
                        <div class="benefit_icon">
                            <i class="fa-solid fa-clock" aria-hidden="true"></i>

                        </div>
                        <div class="benefit_content">
                            <h6>
                                Opening all week

                            </h6>
                            <p> 8:00AM - 10:00PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ================================================= -->
    <section class="banner" style="margin-top:5% ;">
        <div class="container">
            <div class="row py-5 ">
                <div class="col-lg-5 m-auto text-center">
                    <h1>CATEGORIES</h1>
                    <hr class="mx-auto mb-5 line" style="width: 30px;
                    height: 2px;
                    background-color: #c20f1e95;">

                </div>

            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="banner_item " style="background-image:url('./img/projectimg/cate\ 1.jpg') ;">
                        <div>
                            <a href="./ProductsPage/Dress.php" class="banner_category">DRESSES</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="banner_item align-item-center"
                        style="background-image:url(./img/projectimg/cate\ 2.jpg) ;">
                        <div>
                            <a href="./ProductsPage/Suit.php" class="banner_category">Suits</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="banner_item align-item-center"
                        style="background-image:url('./img/projectimg/cate\ 5.jpg') ;">
                        <div>
                            <a href="./ProductsPage/Accessories.php" class="banner_category">Accessories</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <section class="banner" style="margin-top: 1%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="banner_item flex-row align-item-center"
                        style="background-image:url('./img/projectimg/cate\ 3.jpg') ;">
                        <div>
                            <a href="./ProductsPage/Women_shoes.php" class="banner_category">WOMEN's SHOSE</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="banner_item flex-row align-item-center"
                        style="background-image:url(./img/projectimg/cate\ 4.jpg) ;">
                        <div>
                            <a href="./ProductsPage/Men_shoes.php" class="banner_category" >MEN's SHOES</a>
                        </div>
                    </div>
                </div>

   
            </div>
        

            </div>


        </div>
        </div>
    </section>


    <section class="product">
        <div class="container py-5">
            <div class="row py-5 ">
                <div class="col-lg-5 m-auto text-center">
                    <h1>COLLECTION 2022</h1>
                    <h6 style="color: red;">SPRING / SUMMER </h6>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-3 text-center m-auto ">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <a href="singleProduct.php?id=4"><img src="img/DRESS/dress 4-1.PNG" height="310px" width="215px" alt=""></a>
                        </div>
                    </div>
                    <h6><br>LONG BEAD EMBROIDERED RUFFLED DRESS</h6>
                    <p>17100.00</p>

                </div>
                <div class="col-lg-3 text-center m-auto ">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <a href="singleProduct.php?id=7"><img src="./img/DRESS/dress 7-1.PNG" class="img-fluid " alt=""></a>
                        </div>
                    </div>
                    <h6>
                        <br>ONE SHOULDER ELECTRIC-BLUE DRESS</h6>
                    <p>5,150 JOD</p>

                </div>
                <div class="col-lg-3 text-center m-auto ">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <a href="singleProduct.php?id=6"><img src="./img/DRESS/dress 6-1.PNG" class="img-fluid " alt=""></a>
                        </div>
                    </div>
                    <h6>
                        <br>
                    STRAPLESS EMBROIDERED AND SILK LONG DRESS</h6>
                    <p>6,350 JOD</p>

                </div>
                <div class="col-lg-3 text-center m-auto ">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                           <a href="singleProduct.php?id=5"><img src="./img/DRESS/dress 5-1.PNG" class="img-fluid " alt=""></a> 
                        </div>
                    </div>
                    <h6>
                    <br>    
                    MULTICOLOR EMBROIDERED LONG DRESS
                </h6>
                    <p>8,770 JOD</p>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 text-center m-auto ">
                    <a href="./ProductsPage/Dress.php"><button class="btn1" style="cursor:pointer;">
                        Click for more
                    </button></a>



    </section>

    <!-- ================================================ -->

    <section class="about">
        <div class="container py-5">
            <div class="row py-5">

                <div class="container">
                    <div class="col-lg-12">

                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-interval="10">

                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"
                            data-interval="1000">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./img/projectimg/pexels-alexandra-maria-318236.jpg" class=" w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./img/projectimg/pexels-andrea-piacquadio-3755706.jpg" class=" w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./img/projectimg/pexels-mengliu-di-7179179.jpg" class=" w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./img/projectimg/slider 5.jpg" class=" w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./img/projectimg/cover.jpg" class=" w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./img/projectimg/slider 3.jpg" class=" w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8 m-auto text-center py-5">
                    <h3><i class="fa-solid fa-quote-left"></i> STYLE IS A WAY TO SAY WHO YOU ARE WITHOUT HAVING TO
                        SPEAK <i class="fa-solid fa-quote-right"></i></h3>

                </div>
            </div>
        </div>
    </section>
    <!-- ==================================================== -->
    <section class="product" style="margin-top: -5%; margin-bottom: 10%;">
        <div class="container py-5">
            <div class="row py-5 ">
                <div class="col-lg-5 m-auto text-center">
                    <h1 id="discount">20% DISCOUNT</h1>
                    <hr class="mx-auto mb-5 line" style="width: 30px;
                    height: 2px;
                    background-color: #c20f1e95;">

                </div>

            </div>

            <div class="row">
                <div class="col-lg-3 text-center m-auto ">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <a href="singleProduct.php?id=23"><img src="./img/SUIT/suit 6-1.PNG" class="img-fluid " alt=""></a>
                        </div>
                    </div>
                    <h6>
                        <br>
                        EXTRA-SLIM-FIT VIRGIN-WOOL SUIT WITH MICRO PATTERN
                    </h6>
                    <p style="text-decoration: line-through ;">1,434 JOD </p><span>1,195 JOD</span>

                </div>
                <div class="col-lg-3 text-center m-auto ">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <a href="singleProduct.php?id=14"><img src="./img/DRESS/R dress 3-1.PNG" class="img-fluid " alt=""></a>
                        </div>
                    </div>
                    <h6>
                        <br>
                        DESIGNER ORANGE TULLE VOLUME DRESS
                    </h6>
                    <p style="text-decoration: line-through ;">9,201 JOD</p>
                    <p>7,668 JOD</p>

                </div>
                <div class="col-lg-3 text-center m-auto ">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <a href="singleProduct.php?id=25"><img src="./img/SUIT/suit 8-1.png" class="img-fluid " alt=""></a>
                        </div>
                    </div>
                    <h6>
                    <br>    
                    EXTRA-SLIM-FIT SUIT IN PATTERNED STRETCH WOOL
                </h6>
                    <p style="text-decoration: line-through ;">1,554  JOD</p>
                    <p>1,295 JOD</p>

                </div>
                <div class="col-lg-3 text-center m-auto ">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <a href="singleProduct.php?id=12"><img src="./img/DRESS/R dress 1-1.PNG" class="img-fluid " alt=""></a>
                        </div>
                    </div>
                    <h6>
                        <br>
                        HANDCRAFTED FEATHERED & BEADED TUBINO PARTY DRESS
                    </h6>
                    <p style="text-decoration: line-through ;">7,639 JOD</p>
                    <p>6,366 JOD</p>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================================ -->
    <div class="clearfix"></div>
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