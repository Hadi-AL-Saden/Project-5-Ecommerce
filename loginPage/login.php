<?php

include_once '../connection.php';
session_start();

if(isset($_POST['submit'])){
    $loginEmail=$_POST['loginEmail'];
    $loginPass=$_POST['loginPassword'];
  $loginPass=md5($loginPass);

    $stat = "SELECT * FROM  user;";
    $result = mysqli_query($conn,$stat);
    $resultcheck = mysqli_num_rows($result);
 
    if($resultcheck > 0)
    {
    while($row = mysqli_fetch_assoc($result))
    {
        
        if($row['user_email'] == $loginEmail &&  $row['user_password'] == $loginPass){
            $_SESSION["userID"]= $row['user_id']; 
           
           echo  $_SESSION["userID"];
            if($row["is_admin"] == '1'){
                header("Location: ../admin_dashboard/dashboard.php");
            }else{
                header ("location: ../index.php");
            }
        }else{if($row['user_email'] !== $loginEmail ||  $row['user_password'] !== $loginPass){
         
                $ERROR= "<span style='color: red;'> The Email or password is wrong </span>";
          
        }
    }
    }
}
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- bootstrap link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!-- fontawesome link  -->
<script src="https://kit.fontawesome.com/41d0e79cb4.js" crossorigin="anonymous"></script>
<style>
#btn1{
  background-color: #570A57;
}


#btn1:hover{
  background-color: #570a57c6;
}


  form p a:hover{
    color: #570a5783;

  }

</style>

</head>
<body>
    
<!-- <form action="" method="post">

<label for="loginEmail">Email</label>
<br>
<input type="text" name='loginEmail' placeholder= 'Email@...' ><br>

<br>
<label for="loginPassword">Password</label>
<br>
<input type="password" name='loginPassword' placeholder='Passwprd'><br>
<?php if(isset($ERROR)){echo $ERROR;}?>

<br><br>
<input type="submit" name='submit' value='submit'>

</form> -->








<form action="" method="post">
<section class="h-100 h-custom" style="background-color: #f8f1f88f;">
  <div class="container py-5 h-75">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="../img/projectimg/pexels-gustavo-fring-3984871.jpg"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;    height: 300px;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 px-md-2">Login</h3>

            <form class="px-md-2">

              <div class="form-outline mb-4">
          


                
              <label for="loginEmail" >Email</label>
<input type="text" name='loginEmail' placeholder= 'Email@...' class="form-control" >

              </div>

              <div class="row">
                <div class="form-outline mb-4">


                
                  
                <label for="loginPassword">Password</label>
<input type="password" name='loginPassword' placeholder='Passwprd' class="form-control">

<?php if(isset($ERROR)){echo $ERROR;}?>


                </div>

                <input type="submit" name='submit' value='Submit' id="btn1" class="btn btn-lg mb-1" style=" color:white">

                <p style="text-align: center; ">Don't you have an account? <a href="../registerPage/register.php" style="text-decoration:none; font-size:larger; color:#570A57" > Sign up</a></p>
              


            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</form>











</body>
</html>
