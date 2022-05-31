<?php
session_start();
$user_id= $_SESSION['userID'];
include "../connection.php";
$stmt = $conn->query("SELECT * FROM user WHERE user_id=$user_id ");
$user = $stmt->fetch_assoc();

if(isset($_POST['submit']))
{
    $first_name = $_POST['first_name'];
    $last_name=$_POST['last_name'];
   $email=$_POST['email'];
   $phonenumber=$_POST['phonenum'];
   $password=$_POST['password'];
   $age=$_POST['age'];
   $gender=$_POST['gender'];

   $update_data = "UPDATE user SET user_first_name='$first_name', user_last_name='$last_name',user_email='$email',phone_num='$phonenumber',user_password='$password',age='$age',gender='$gender' WHERE user_id=$user_id;";
   $conn->query($update_data);

   header("Location: ./user_profile.php");
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../css/bootstrap.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/singleProduct.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script&family=Lobster&family=Lora&family=Sacramento&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css%22%3E">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css%22%3E">
        <link rel="stylesheet" href="../css/footer.css">

    <script src="https://kit.fontawesome.com/f32d43040b.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile_edit.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://kit.fontawesome.com/b4ff4e859b.js" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body>
<!-- <nav class="navbar navbar-expand-lg navbar_single_product">
        <div class="container navbar_single_product">


        <a class="navbar-brand" href="#"><img src="../img/projectimg/logo.png" width="125px" height="auto"alt=""></a>


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
                    <li class="nav-item">
                        <a class="nav-link" href="../about us/about_us.php"> About us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="#footer">
                            Contact us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#discount">Our discount</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            CATEGORIES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="../ProductsPage/Dress.php">Dress</a></li>
                          <li><a class="dropdown-item" href="../ProductsPage/Suit.php">Suits</a></li>
                          <li><a class="dropdown-item" href="../ProductsPage/Accessories.php">Accessories</a></li>
                          <li><a class="dropdown-item" href="../ProductsPage/Men_shoes.php">Men Shoes</a></li>
                          <li><a class="dropdown-item" href="../ProductsPage/Women_shoes.php">Women Shoes</a></li>
                         
                        </ul>
                      </li>
                    
                </ul>
                <form action="" method="post">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                    profile icon/login/register -->
                    
                <?php
                        /*  $check=0;
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
                           <li class="nav_item"><input class="nav-link" type="submit" name="logout" value=" Logout " style="border:none; background-color: white;">
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
                    <?php if(isset( $cart)){echo $cart;}*/?>

                    <!-- </li>
                </ul>
                </form>

            </div>
        </div>
    </nav> -->
    
  
    <a href="./user_profile.php"></a>
    <div class="wrapper">
        <div class="left">
          
        </div>
        <div class="right">
            <div class="info">
                <h3>  User Data </h3>
                <br>
                <div class="info_data">
                     <div class="data">
                         
                        <form action="" method="post" class="bigdiv">
                            <div class="div1">
                            
                                <label for="mail" class="form-text"><strong>First Name</strong></label>
                                <input type="text" placeholder="first name" name="first_name" class="form-control" value= <?php echo $user['user_first_name']; ?> >
                                <br>
                                <label for="psw" class="form-text"><strong>Last Name</strong></label>
                                <input type="text" placeholder="last name" name="last_name" class="form-control" value=  <?php echo $user['user_last_name']; ?>>
                                <br>
                                <label for="psw" class="form-text"><strong>Email</strong></label>
                                <input type="text" placeholder="last name" name="email" class="form-control" value=  <?php echo $user['user_email']; ?>>
                                <br>
                                <label for="psw" class="form-text"><strong>Phone Number</strong></label>
                                <input type="text" placeholder="phone num" name="phonenum" class="form-control" value=  <?php echo $user['phone_num']; ?>>
                                <br>
                                <label for="psw" class="form-text"><strong>User Password</strong></label>
                                <input type="text" placeholder="password" name="password" class="form-control" value=  <?php echo $user['user_password']; ?>>
                                <br>
                                <label for="psw" class="form-text"><strong>Age</strong></label>
                                <input type="text" placeholder="age" name="age" class="form-control" value=  <?php echo $user['age']; ?>>
                                <br>
                                <label for="psw" class="form-text"><strong>Gender</strong></label>
                                <input type="text" placeholder="gender" name="gender" class="form-control" value=  <?php echo $user['gender']; ?>>
                            <br>
                                <input type="submit" name="submit" value="confirm information" class="btn btn-secondary">
                            </div>
                        </form>
  
            <!-- ============================================ -->

            <div class="social_media">
                <ul>
                  <li><a href="../index.php"> Home page <i class="fa-solid fa-house"></i></a></li>
                  <li><a href=" ./user_profile.php"> Back to Profile <i class="fa-solid fa-arrow-left"></i></a></li>
                 
              </ul>
          </div>
        </div>
    </div>



    

    </form>
    
 


</body>
</html>