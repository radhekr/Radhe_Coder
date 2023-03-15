<?php
include('includes/connect.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online website</title>
      <!-- BOot strap css link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
         crossorigin="anonymous">

    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w
     ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- css part  -->
     <link rel="stylesheet" href="style.css">
</head>


<body>
<!-- container-fluid is auto for get 100% space from bootstrap -->
<!-- <div class="container-fluid">
    First child means navbar
    second child menas for heading part
    Prodect bar means middle
           <div class="row">
               <div class="col-md-10">
                      <div class="col-md-4 mb-2"></div>
                      <div class="col-md-4 mb-2"></div>
                      <div class="col-md-4 mb-2"></div>
               </div>

               <div class="col-md-2 bg-secondary"></div>
           </div>
    Last child means Bottom part
</div> -->


<div class="container-fluid p-0">
    <!-- First child means navbar -->
    <nav class="navbar navbar-expand-lg       Navbar-light bg-info">
  <div class="container-fluid">

    <img src="./image/logo.jpg" class="logo" alt="">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
          <!-- Font awesome icon for cart lobo ands all lobo -->
        </li>


        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:</a>
        </li>
        








      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



    <!--  Third child  -->

    <div class="bg-light">
  <h3 class="text-center">Hidden store</h3>
  <p class="text-center">communication is at the heart of e-commerece</p>
</div>
<!-- ==================================================================================================== -->
<!-- Prodect bar means middle -->

<div class="row">
    <!--  ========================   first start  ================================ -->
    <div class="col-md-10">
        <div class="row">
            
            <div class="col-md-4 mb-2">
            <div class="card">
                <img src="./image/f3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>




<div class="col-md-4 mb-2">
            <div class="card">
                <img src="./image/f3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>




<div class="col-md-4 mb-2">
            <div class="card">
                <img src="./image/f3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>




<div class="col-md-4 mb-2">
            <div class="card">
                <img src="./image/f3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>




<div class="col-md-4 mb-2">
            <div class="card">
                <img src="./image/f3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>




<div class="col-md-4 mb-2">
            <div class="card">
                <img src="./image/f3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>


<div class="col-md-4 mb-2">
            <div class="card">
                <img src="./image/f3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>
<!-- ---------------------------------------first End--------------------------------------------------------- -->

<!--  ========================   second start  ================================ -->
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./image/f4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>
<!--  ========================   third start  ================================ -->
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./image/f1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
            </div>

        </div>

<!-- ------------------------------End first row of the card ---------------------------------------    -->










<!-- ------------------------------Above this you can insert the card ---------------------------------------    -->
    </div>
    <div class="col-md-2 bg-secondary p-0">
        <ul class="navbar-nav me-auto text-center">

            <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h5>Delevery Brands</h5></a>
            </li>

            <?php
            $select_brands="Select * from brands";
            $result_brands=mysqli_query($conn,$select_brands);
            // $row_data=mysqli_fetch_assoc($result_brands);
            // echo $row_data['brands_title'];
            while($row_data=mysqli_fetch_assoc($result_brands))
            {
              $brand_title=$row_data['brands_title'];
              $brand_id=$row_data['brand_id'];
              echo " <li class='nav-item'>
              <a href='#' class='nav-link text-light'><h5>$brand_title</h5></a>
          </li>";
            }
            
            ?>
            </ul>



            <ul class="navbar-nav me-auto text-center">

            <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h5>Categories</h5></a>
            </li>

            <?php
            $select_category="Select * from categories";
            $result_category=mysqli_query($conn,$select_category);
            // $row_data=mysqli_fetch_assoc($result_brands);
            // echo $row_data['brands_title'];
            while($row_data=mysqli_fetch_assoc($result_category))
            {
              $category_title=$row_data['categories_title'];
              $category_id=$row_data['categories_id'];
              echo " <li class='nav-item'>
              <a href='#' class='nav-link text-light'><h5>$category_title</h5></a>
          </li>";
            }
            
            ?>
            </ul>




    </div>
</div>


<!-- ================================================================================================ -->
<!-- Last child means Bottom part -->
    <div class="bg-info p-3 text-center">
        <p>
            all rights reserved o- designed by khanam-2022
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