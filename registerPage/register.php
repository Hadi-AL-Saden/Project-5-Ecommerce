<?php
include_once "../connection.php";
$name_regex="/^([a-zA-Z' ]+)$/";
// $email_regex="/^[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/";
$password_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/"; 
$phoneNumber_regex="/^\\(?([0-9]{3})\\)?[-.\\s]?([0-9]{3})[-.\\s]?([0-9]{4})?[-.\\s]?([0-9]{4})$/";
if(isset($_POST['submit']))
{
   $first_name=$_POST['firstName'];
   $last_name=$_POST['lastName'];
   $email=$_POST['email'];
   $phonenumber=$_POST['phoneNum'];
   $password=$_POST['passWord'];
   $confirm_password=$_POST['CpassWord'];
   $age=$_POST['age'];
   $gender=$_POST['gender'];

   ////////////////////////////////////////////////////
   $email_correct3 = true;

   $stat = "SELECT * FROM  user;";
   $result = mysqli_query($conn,$stat);
   $resultcheck = mysqli_num_rows($result);

   if($resultcheck > 0){
   while($row = mysqli_fetch_assoc($result)){
       if($email == $row['user_email']) {
        $emailERR2="<span style=' color:red'>The Email is already exist</span>";
        $email_correct2= false;
        $email_correct3 = $email_correct2;
       }
       else{
        $email_correct2= true;
        $email_correct3 = $email_correct2;
       }
   }}
   ///firstname
   if(preg_match($name_regex,$first_name)){
       $firstname_correct= true;
   }
   else{
    $fnameERR="<span style=' color:red'>Required only characters</span>";
    $firstname_correct= false;
   }
   //////lastname
   if(preg_match($name_regex,$last_name)){
       $lastname_correct= true;
   }else{
    $lnameERR="<span style=' color:red'>Required only characters</span>";
    $lastname_correct= false;
   }
   ///////email
   if(filter_var($email,FILTER_VALIDATE_EMAIL)){
       $email_correct= true;
   }
   else{
    $emailERR="<span style=' color:red'>Invalid email</span>";
    $email_correct= false;
   }
   ///////phone number
   if(preg_match($phoneNumber_regex,$phonenumber)){
       $phonenum_correct= true;
   }
   else{
    $phoneERR="<span style=' color:red'>Should be 14 digits</span>";
    $phonenum_correct= false;
   }
   ////////////// password
   if(preg_match($password_regex,$password)){
       $password_correct= true;

   }
   else{
    $passwordERR="<span style=' color:red; ' >The password should contain <br> uppercase and lowercase <br> letters, numbers,<br> and special characters </span>";
    $password_correct= false;
   }
   ////////////// confirm password
   if($password === $confirm_password){
       $confirm_password_correct= true;

   }
   else{
    $cpasswordERR="<span style=' color:red; '>Passwords don't match</span>";
    $confirm_password_correct= false;
   }

  if($firstname_correct && $lastname_correct && $email_correct && $phonenum_correct && $password_correct && $confirm_password_correct &&  $email_correct3){
    $password=md5($password);
    $sql = "INSERT INTO user (user_first_name, user_last_name, user_email,phone_num,user_password,age,gender)
    VALUES ('$first_name', '$last_name', '$email','$phonenumber','$password','$age','$gender');";
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
  header("location:../loginpage/login.php");
}
if(!empty($email)) $x1= $email;
if(!empty($phonenumber)) $x2= $phonenumber;
if(!empty($first_name)) $x3= $first_name;
if(!empty($last_name)) $x4= $last_name;
if(!empty($age)) $x5= $age;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <!-- fontawesome link  -->
  <script src="https://kit.fontawesome.com/41d0e79cb4.js" crossorigin="anonymous"></script>
  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;

      background-color: #f8f1f88f;
    }
    #btn2{
      background-color: #570A57;
      color: white;
    }
    #btn2:hover{
      background-color: #570a57b0;
    }
  form p a:hover{
    color: #570a5783;
  }
  </style>
</head>
<body>
  <form action="" method="post" style="width: 70%;"> 
  <div >
    <div class=" row d-flex justify-content-center align-items-center h-50">
    <div class="col">
      <div class="card card-registration ">
        <div class="row g-0">
          <div class="col-xl-6 d-none d-xl-block ">
            <img src="../img/projectimg/reg.jpg" alt="Sample photo" class="img-fluid"
              style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height: 100%;" />
          </div>
          <div class="col-xl-6">
            <div class="card-body p-md-5 text-black">
              <h3 class="mb-5 text-uppercase">Registration form</h3>
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                   <!-- First Name -->
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" name="firstName" placeholder="First Name" id="form3Example1m"
                      class="form-control form-control-lg" value="<?php if(isset($x3)) echo $x3; ?>">
                    <?php if(isset( $fnameERR)){echo  $fnameERR;}?>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <!-- last name  -->
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" name='lastName' placeholder='Last Name' id="form3Example1n"
                      class="form-control form-control-lg" value="<?php if(isset($x4)) echo $x4; ?>">
                    <?php if(isset(  $lnameERR)){echo  $lnameERR;}?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <!-- Email  -->
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name='email' placeholder='Email@...' id="form3Example1m1"
                      class="form-control form-control-lg" value="<?php if(isset($x1)) echo $x1; ?>">
                    <?php if(isset( $emailERR)){echo  $emailERR;}?>
                    <?php if(isset( $emailERR2)){echo  $emailERR2;}?>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <!-- Phone Number   -->
                    <label for="phoneNum" class="form-label">Phone Number</label>
                    <input type="text" name="phoneNum" placeholder="00962 777 777 777" id="form3Example1n1"
                      class="form-control form-control-lg" value="<?php if(isset($x2)) echo $x2; ?>">
                    <?php if(isset( $phoneERR)){echo  $phoneERR;}?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <!-- Password  -->
                    <label for="passWord">Password</label>
                    <input type="password" name="passWord" class="form-control form-control-lg" id="form3Example1m1">
                    <?php if(isset($passwordERR)){echo $passwordERR;}?>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <!-- Confirm Password -->
                    <label for="CpassWord">Confirm Password</label>
                    <input type="password" name="CpassWord" class="form-control form-control-lg" id="form3Example1m1">
                    <?php if(isset($cpasswordERR)){echo $cpasswordERR;}?>
                  </div>
                </div>
              </div>
              <div class="form-outline mb-4">
                <label for="age" class="form-label">Age</label>
                <input type="number" name='age' placeholder="Your Age" class="form-control form-control-lg"
                  id="form3Example8" value="<?php if(isset($x5)) echo $x5; ?>">
              </div>
              <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                <!-- Gender  -->
                <h6 class="mb-0 me-4">Gender:</h6>
                <div class="form-check form-check-inline mb-0 me-4">
                  <input type="radio" name="gender" value="Male" class="form-check-input">
                  <label for="Male">Male</label>
                </div>
                <div class="form-check form-check-inline mb-0 me-4">
                  <input type="radio" name="gender" value="Female" class="form-check-input">
                  <label for="Female">Female</label>
                </div>
              </div>
              <!-- Button  -->
              <div class="d-flex justify-content-end ">
                <input type="submit" name='submit' id="btn2" class="btn btn-lg ms-2" >  
              </div>
              <p>Already have an account? <a href="../loginPage/login.php" style="text-decoration:none; font-size:larger; color:#570A57"> Log In</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </section>
  </form>
</body>
</html>