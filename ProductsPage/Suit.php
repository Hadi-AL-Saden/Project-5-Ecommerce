<?php

include_once "../connection.php";

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- bootstrap link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- fontawesome link  -->
    <script src="https://kit.fontawesome.com/41d0e79cb4.js" crossorigin="anonymous"></script>
    <title>Document</title>
    
</head>
<body>

<div class="container">
<h2>Product</h2>
<h4 style="color:black">Category</h4>
<div class="row">




    <?php

    // select products

    $sql_query="SELECT * FROM products ;";
    $result = $conn->query($sql_query);
    $result_check4= mysqli_num_rows($result);

    // check result
    if($result_check4 > 0){

        while($row=mysqli_fetch_assoc($result)){

            $img=$row['product_image'];
            $productName=$row['product_name'];
            $price=$row['product_price'];
            $category=$row['product_category'];

            // check category
            if($category==='Suit'){

            ?>
<div class=" col-md-3">

   <!-- image echo  -->
<img src='<?php echo $img ?>'style="height:80% ; width:100% ;"  >
    
<!-- product name echo  -->
 <h4>Producyt Name: <?php  echo $productName ?></h4>

 <!-- product price echo  -->
<h4>$<?php echo $price ?></h4>

<!-- category echo -->
<h5 style="color:red;"><?php echo $category ?></h5>



</div>
            <?php 
            }
        }
    }
 ?>

</div>
</div>

</body>
</html>