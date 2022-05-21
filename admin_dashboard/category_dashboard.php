<?php
include "../connection.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/f32d43040b.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="user_dashboard.css">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
  <!--           nav --> 
<header>
            <!-- Sidebar -->
            <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
              <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                  <a href="user_dashboard.php" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>User dashboard</span>
                  </a>
                  <a href="product_dashboard.php" class="list-group-item list-group-item-action py-2 ripple ">
                    <i class="fas fa-chart-area fa-fw me-3"></i><span>product dashboard</span>
                  </a>
                  <a href="category_dashboard.php" class="list-group-item list-group-item-action py-2 ripple"><i
                      class="fas fa-lock fa-fw me-3"></i><span>Catagory dashboard</span></a>
                  
                </div>
              </div>
            </nav>
            <!-- Sidebar -->

            <!-- Navbar -->
            <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
              <!-- Container wrapper -->
              <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                  aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="#">
                  <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="25" alt="MDB Logo"
                    loading="lazy" />
                </a>
              
                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex flex-row">
              

                  <!-- Icon -->
                  <li class="nav-item">
                    <a class="nav-link me-3 me-lg-0" href="#">
                      <i class="fas fa-fill-drip"></i>
                    </a>
                  </li>
                  <!-- Icon -->
                  <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="#">
                      <i class="fab fa-github"></i>
                    </a>
                  </li>

                

                  <!-- Avatar -->
                 
                    <a class="nav-link  hidden-arrow d-flex align-items-center" href="#"
                      id="navbarDropdownMenuLink" role="button"  aria-expanded="false">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle"
                        height="22" alt="Avatar" loading="lazy" />
                    </a>
                  
               
              </div>
              <!-- Container wrapper -->
            </nav>
            <!-- Navbar -->
          </header>
          <!--Main Navigation-->

          <!--Main layout-->
          <main style="margin-top: 58px;">
            <div class="container pt-4"></div>
          </main>
          <!--Main layout-->
  
  <br>
<!--         nav --> 
<button type="button" class="btn btn-sunny  text-uppercase"><a href="category_create.php">create new category</a></button>


<table class="table container table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Category id</th>
      <th scope="col">Category name</th>
      <th scope="col">edit</th>
      

    </tr>

  </thead>
  <tbody class="table-warning">
    <?php
    
    $stmt = $conn->query("SELECT * FROM category");
   

   
    while($category = $stmt->fetch_assoc())
    {
      if($category['is_deleted']== 0)
      {
        echo "<tr>
        <th scope='row'>$category[id]</th>
        <td>$category[category_name]</td>
       
        <td> ";
        // echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
        echo '<a href="read.php?id='. $category['id'] .'"<button  class="btn  btn-sm"><i class="fa-solid fa-eye"></i>Show</button></a>';
        echo '<a href="category_update.php?id='. $category['id'] .'"<button  class="btn  btn-sm"><i class="fa-solid fa-pen-to-square"></i>Update</button></a>';
        echo '<a href="category_delete.php?id='. $category['id'] .'"<button  class="btn  btn-sm"><i class="fa-solid fa-wrench"></i>delete</button></a>';
      
      echo "</tr>";
       }

    };
    

    ?>
  </tbody>
</table>
</body>
</html>