<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/f32d43040b.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="user_dashboard.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="dashboard.css?v=<?php echo time(); ?>">
  <title>Document</title>
</head>
<body>
  <!--           nav --> 
  
<header  >
            <!-- Sidebar -->
            <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
              <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                  <a href="user_dashboard.php" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3 "></i><span>User dashboard</span>
                  </a>
                  <a href="product_dashboard.php" class="list-group-item list-group-item-action py-2 ripple ">
                    <i class="fas fa-chart-area fa-fw me-3 "></i><span>product dashboard</span>
                  </a>
                 
                  <a href="category_dashboard.php" class="list-group-item list-group-item-action py-2 ripple"><i
                      class="fas fa-lock fa-fw me-3 "></i><span>Catagory dashboard</span></a>
                      </a>
                      <a href="sales_dashboard.php" class="list-group-item list-group-item-action py-2 ripple "><i class="fa-solid fa-coins fa-fw me-3"></i>
                </i><span>Sales dashboard</span></a>

                      <a href="admin_dashboard.php" class="list-group-item list-group-item-action py-2 ripple"><i class="fa-solid fa-screwdriver fa-fw me-3"></i><span> Admin dashboard</span></a>
                  
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
                <a class="navbar-brand" href="dashboard.php">
                  <img src="data:image/png;base64,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" height="25" alt="MDB Logo"
                    loading="lazy" />
                    &nbsp;&nbsp; Admin panel
                </a>
              
                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex flex-row">
              

               

                

                  <!-- Avatar -->
                 
                    <a class="nav-link avatar_logout hidden-arrow d-flex align-items-center" href="../index.php"
                      id="navbarDropdownMenuLink" role="button"  aria-expanded="false">
                      <img src="https://icon-library.com/images/avatar-icon-images/avatar-icon-images-4.jpg" class="rounded-circle"
                        height="22" alt="Avatar" loading="lazy" /> 
                        Log out
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
  
  <br>
</body>
</html>