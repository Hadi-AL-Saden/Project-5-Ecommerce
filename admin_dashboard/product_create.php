<?php
include "../connection.php";

if (isset($_POST['submit'])){
$product_name = $_POST["product_name"];
$Product_category = $_POST['product_category'];
$Product_price = $_POST["Product_price"];
$Product_color = $_POST["Product_color"];
$Product_size = $_POST['Product_size'];
$product_image = $_POST['Product_image'];
$product_description = $_POST['product_description'];
// $product_image = $_POST['product_image'];


$add_user = "INSERT INTO products (product_name,product_category, product_price, product_color , product_size , product_description, product_image) VALUES ('$product_name','$Product_category', '$Product_price', '$Product_color' , '$Product_size' , '$product_description','$product_image');";
if ($conn->query($add_user) === TRUE) {
    echo "New product created successfully";
  } else {
    echo "Error: " . $add_user . "<br>" . $conn->error;
  }

echo "<br>";
echo '<div class="alert alert-success d-flex justify-content-center" role="alert">
Employee was added successfully redircting you to the main page</div>';


echo'<script>
setTimeout(() => {
    window.location = "product_dashboard.php";
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
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Create New Product</h3>

            <form class="px-md-2" action="" method="post">

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="product_name" class="form-control" />
                <label class="form-label"  for="form3Example1q">Product name </label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="product_category" class="form-control" />
                <label class="form-label"  for="form3Example1q">Product category </label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="Product_price" class="form-control" />
                <label class="form-label"  for="form3Example1q">Product price</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="Product_color" class="form-control" />
                <label class="form-label"  for="form3Example1q">Product color</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="Product_size" class="form-control" />
                <label class="form-label"  for="form3Example1q">Product size</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="Product_image" class="form-control" />
                <label class="form-label"  for="form3Example1q">Product Image</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="product_description" class="form-control" />
                <label class="form-label"  for="form3Example1q">Product description</label>
              </div>
              <!-- <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="product_image" class="form-control" />
                <label class="form-label"  for="form3Example1q">product_image</label>
              </div> -->
              
              <input type="submit" value="Submit" name="submit" style="  background-color: #570A57;" class="btn btn-success btn-lg mb-1">

            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>