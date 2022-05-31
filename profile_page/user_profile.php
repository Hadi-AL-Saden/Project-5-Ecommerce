<?php
include "../connection.php";
session_start();
$user_id= $_SESSION['userID'];
// $get_id=$_GET['id'];
if(isset($_GET['id'])){
    $get_id = $_GET['id'];
    $stmt = $conn->query("SELECT * FROM user Where user_id=$get_id");
    $user = $stmt->fetch_assoc();
}
else{
    $stmt = $conn->query("SELECT * FROM user Where user_id=$user_id");
    $user = $stmt->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://kit.fontawesome.com/b4ff4e859b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
 
    <link rel="stylesheet" href="./css/singleProduct.css?v=<?php echo time(); ?>">
   
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
<link rel="stylesheet" href="./css/footer.css">
   
    <script src="https://kit.fontawesome.com/f32d43040b.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>   
    <div class="wrapper">
        <div class="left"></div>
        <div class="right">
            <div class="info">
                <h3>   
                    <?php
                    echo $user['user_first_name'].' '. $user['user_last_name'];
                    ?>
                </h3>
                <div class="info_data">
                     <div class="data">
                        <h4>Email</h4>
                        <p> 
                            <?php
                                echo $user['user_email'];
                            ?>
                        </p>
                     </div>
                     <div class="data">
                       <h4>Phone</h4>
                        <p> <?php
            echo $user['phone_num'];

            ?></p>
                  </div>
                </div>
            </div>
          
          <div class="projects">
               
                <div class="projects_data">
                     <div class="data">
                        <h4>Age</h4>
                        <p> <?php
            echo $user['age'].' '.'Years old';?></p>
                     </div>
                     <div class="data">
                       <h4>Gender</h4>
                        <p><?php  echo $user['gender']; ?></p>
                  </div>
                </div>
            </div>
          
            <div class="social_media">
                <ul>
                  <li><a href="../index.php"> Home page <i class="fa-solid fa-house"></i></a></li>
                  <li><a href="./user_profile_update.php"> Edit Profile <i class="fa-solid fa-pen-to-square"></i></a></li>
                 
              </ul>
          </div>
        </div>
    </div>
                        </div>
                        
</body>
</html>

