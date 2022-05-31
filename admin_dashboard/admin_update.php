<?php
include "../connection.php";
$get_data = "SELECT * FROM user_admin WHERE id= $_GET[id]";
$stmt= $conn->query($get_data);
$admin_data = $stmt->fetch_assoc();

if(isset($_POST['submit']))
{
    
    $admin_email = $_POST['email'];
    
   

   $update_data = "UPDATE user_admin SET email='$admin_email' WHERE id=$_GET[id];";
   $conn->query($update_data);

   
   echo'<script>
   setTimeout(() => {
       window.location = "admin_dashboard.php";
     }, "1000")
   
   </script>';

}

?>
<!DOCTYPE html>
<html>
  <title>update admin</title>
  <head> <script src="https://kit.fontawesome.com/f32d43040b.js" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/f32d43040b.js" crossorigin="anonymous"></script>

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
      
     

      <h1>Upate Employee</h1>
     
      <div class="formcontainer ">
      <div class="container">
        <label for="uname"><strong>admin email</strong></label>
        <input type="text" placeholder="email" name="email"  value =<?php echo $admin_data['email']; ?>>
        
      </div>   
      <input type="submit" name="submit"  class="butt btn btn1" value="submit">
      
    </form>

    <!-- <a href="admin_dashboard.php">back to dashboard</a> -->
  </body>
</html>