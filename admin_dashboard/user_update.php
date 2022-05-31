<?php
include "../connection.php";
$get_data = "SELECT * FROM user WHERE user_id= $_GET[id]";
$stmt= $conn->query($get_data);
$user_data = $stmt->fetch_assoc();

if(isset($_POST['submit']))
{
    $id=$_POST['user_id'];
    $first_name = $_POST['first_name'];
    $last_name=$_POST['last_name'];
   $email=$_POST['email'];
   $phonenumber=$_POST['phonenum'];
   $password=$_POST['password'];
   $age=$_POST['age'];
   $gender=$_POST['gender'];

   $update_data = "UPDATE user SET user_first_name='$first_name', user_last_name='$last_name',user_email='$email',phone_num='$phonenumber',user_password='$password',age='$age',gender='$gender' WHERE user_id=$_GET[id];";
   $conn->query($update_data);

   echo'<script>
setTimeout(() => {
    window.location = "user_dashboard.php";
  }, "10")

</script>';

  
}

?>
<!DOCTYPE html>
<html>
  <title>Simple Sign up from</title>
  <head> <script src="https://kit.fontawesome.com/f32d43040b.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="user_dashboard.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="dashboard.css?v=<?php echo time(); ?>">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      form {
        margin
      border: 5px solid #f1f1f1;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      .icon {
      font-size: 110px;
      display: flex;
      justify-content: center;
      color: #4286f4;
      }
      button {
      background-color: #4286f4;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grab;
      width: 48%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: center;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
      }
    }
    .btn1
    {
      float:left;
    }
    .label 
    {
      display:inline;
      font-size: x-large;
    }
    
    
    
    </style>
  </head>
  <body>
    <form action="" method="post">
      <h1>Update User</h1>
      <div class="icon">
        
      </div>
      <div class="formcontainer">
      <div class="container c1">
        <label for="uname"><strong>user id</strong></label>
        <input type="text" placeholder="user_id" name="user_id"  value =<?php echo $user_data['user_id']; ?> readonly   >
        <label for="mail"><strong>first name</strong></label>
        <input type="text" placeholder="first name" name="first_name" value= <?php echo $user_data['user_first_name']; ?> >
        <label for="psw"><strong>last name</strong></label>
        <input type="text" placeholder="last name" name="last_name" value=  <?php echo $user_data['user_last_name']; ?>>
        <label for="psw"><strong>last name</strong></label>
        <input type="text" placeholder="last name" name="email" value=  <?php echo $user_data['user_email']; ?>>
        <label for="psw"><strong>phone number</strong></label>
        <input type="text" placeholder="phone num" name="phonenum" value=  <?php echo $user_data['phone_num']; ?>>
        <label for="psw"><strong>user password</strong></label>
        <input type="text" placeholder="password" name="password" value=  <?php echo $user_data['user_password']; ?>>
        <label for="psw"><strong>age</strong></label>
        <input type="text" placeholder="age" name="age" value=  <?php echo $user_data['age']; ?>>
        <label for="psw"><strong>gender</strong></label>
        <input type="text" placeholder="gender" name="gender" value=  <?php echo $user_data['gender']; ?>>
      </div>
      <input type="submit" class="butt btn btn1" name="submit" value="Submit">
      
    </form>

    <!-- <a href="dashboard.php">back to dashboard</a> -->
  </body>
</html>