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
    Prodect bar means middle
    Last child means Bottom part
</div> -->


<div class="container-fluid">
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


    <!-- Prodect bar means middle -->
    <!-- Last child means Bottom part -->
</div>











     <!-- Script link -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
        crossorigin="anonymous"></script>
</body>
</html>