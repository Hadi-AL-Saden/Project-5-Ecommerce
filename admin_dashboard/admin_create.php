<?php
include "../connection.php";

if (isset($_POST['submit'])){
$email = $_POST["email"];

$add_admin = "INSERT INTO user_admin (email) VALUES ('$email');";
if ($conn->query($add_admin) === TRUE) {
    echo "New admin created successfully";
  } else {
    echo "Error: " . $add_admin . "<br>" . $conn->error;
  }

echo "<br>";
echo '<div class="alert alert-success d-flex justify-content-center" role="alert">
Employee was added successfully redircting you to the main page</div>';


echo'<script>
setTimeout(() => {
    window.location = "admin_dashboard.php";
  }, "2000")

</script>';

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <title>Document</title>
</head>
<body >
<section class="h-100 h-custom" >
  <div class="container py-5 h-100">
      
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
            
         
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Add admin</h3>

            <form class="px-md-2" action="" method="post">

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="email" class="form-control" />
                <label class="form-label"  for="form3Example1q">Admin email </label>
              </div>
              
              
          <input type="submit" value="Submit" name="submit"  style="  background-color: #570A57;" class="btn btn-success btn-lg mb-1">

            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>