<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <!-- BOot strap css link -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
         crossorigin="anonymous">


         <!-- css part  -->
     <link rel="stylesheet" href="../style.css">
     <style>
        .admin_image{
         width: 100px;
         object-fit: contain;
          }
     </style>
</head>
<body>

<!-- Navbar  -->
<div class="container-fluid p-0">
    <!-- ===================================== First child =================================  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="../image/logo.jpg" class="logo" alt="">

            <nav class="navbar navbar-expand-lg ">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Welcome gest</a>
                    </li>
                </ul>
             </nav>
            </div>
            
        </nav>
        <!-- ===================================== second child =================================  -->
        <div class="bg-light">
            <h3 class="text-center" p-2> Manage Details</h3>
        </div>
        <!-- ===================================== third child =================================  -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-item-center" >
                <div class="px-5">
                    <a href=""><img src="../image/f1.jpg" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
              <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1 p-2">Insert Product</a></button>
              <button><a href="" class="nav-link text-light bg-info my-1 p-2">View Product</a></button>
              <button><a href="First_page_index.php?insert_category" class="nav-link text-light bg-info my-1 p-2">insert catgories</a></button>
              <button><a href="" class="nav-link text-light bg-info my-1 p-2">view catgories</a></button>
              <button><a href="First_page_index.php?insert_brand" class="nav-link text-light bg-info my-1 p-2">insert Brands</a></button>
              <button><a href="" class="nav-link text-light bg-info my-1 p-2">View Brands</a></button>
              <button><a href="" class="nav-link text-light bg-info my-1 p-2">All Orders</a></button>
              <button><a href="" class="nav-link text-light bg-info my-1 p-2">All Payments</a></button>
              <button><a href="" class="nav-link text-light bg-info my-1 p-2">List users</a></button>
              <button><a href="" class="nav-link text-light bg-info my-1 p-2">LogOut</a></button>
              </div>
            </div>
        </div>
</div>




<!-- =======================  Fourth child ========================== -->


<div class="container my-5">
    <?php
    if(isset($_GET['insert_category']))
    {
        include('insert_categories.php');
    }

    if(isset($_GET['insert_brand']))
    {
        include('insert_brands.php');
    }
    ?>
</div>




<!-- Last child means Bottom part -->
<div class="bg-info p-3 text-center footer">
        <p>
            <b>            all rights reserved o- designed by khanam-2022</b>
        </p>
    </div>
    <!-- -------------------------------------------------------End last child ------------------- -->
</div>





    <!-- Script link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
        crossorigin="anonymous"></script>
</body>
</html>