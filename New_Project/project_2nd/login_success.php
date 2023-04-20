<?php 
session_start();
$server = "localhost";
$user = "root";
$pass = "";
$db = "myshop";

$conn = mysqli_connect($server, $user, $pass, $db);
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
else{
    $mysess = $_SESSION['mysession'];
        if($mysess == true){

        }
        else{
            header("location: index.php");
        }
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SuccessFully Login</title>
</head>

<body>
    <section id="header">
        <img src="image/logo.JPG" alt="logo" />
    </section>
    <!-- Nav bar Start  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fs-5">
        <div class="container-fluid">
            <div class="px-4 fs-3">Welcome, <small class="fs-6">Admin</small></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="snacks.php" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Snacks
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="snacks.php">Kurkure</a></li>
                            <li><a class="dropdown-item" href="snacks.php">Biscuits</a></li>
                            <li><a class="dropdown-item" href="snacks.php">Haldiram's Mixture</a></li>
                            <li><a class="dropdown-item" href="snacks.php">Chips</a></li>
                            <li><a class="dropdown-item" href="snacks.php">Namkin</a></li>
                            <li><a class="dropdown-item" href="snacks.php">Samosa</a></li>
                            <li><a class="dropdown-item" href="snacks.php">Momos</a></li>
                            <li><a class="dropdown-item" href="snacks.php">Samosa Chaat</a></li>
                            <li><a class="dropdown-item" href="snacks.php">Masaledar Poori</a></li>
                            
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="sweets.php" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Sweets
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="sweets.php">GULAB JAMUN</a></li>
                            <li><a class="dropdown-item" href="sweets.php">RASGULLA</a></li>
                            <li><a class="dropdown-item" href="sweets.php">RASMALAI</a></li>
                            <li><a class="dropdown-item" href="sweets.php">JALEBI</a></li>
                            <li><a class="dropdown-item" href="sweets.php">Laddu</a></li>
                            <li><a class="dropdown-item" href="sweets.php">Besan Laddu</a></li>
                            <li><a class="dropdown-item" href="sweets.php">Motichur Laddu</a></li>
                            <li><a class="dropdown-item" href="sweets.php">Rabdi</a></li>
                            <li><a class="dropdown-item" href="sweets.php">Ghevar</a></li>
                        </ul>
                    </li>

                </ul>
                <a href=""><img src="image/kart-icon.jpg" alt="Kart icon" class="mykart mykart-icon2 mx-2" /></a>
                <form class="d-flex">
                    <a href="logout.php"><button class="btn btn-danger rounded-pill" type="button">Logout</button></a>
                </form>
            </div>
        </div>
    </nav>
    <!-- navbar End  -->

    <!-- Slider Start  -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner carousel-fade">
            <div class="carousel-item active">
                <img src="image/image1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/image2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/image3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Slider End  -->


    <!-- Product Heading Start -->
    <div class="row py-lg-5 mx-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Welcome to Restarant Guru</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator,
                etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            <p>
                <a href="order_placed.php" class="btn btn-primary" 
                    type="button">Order Placed</a>
                <a href="Order_placed.php" class="btn btn-secondary">View All Order</a>
            </p>
        </div>
    </div>
    <!-- Product Heading  End-->

    <!-- Product Container Start -->
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm m-4">
                        <img src="image/Rasgulla.jpg" alt="rasgulla image" class="productImg" />

                        <div class="card-body">
                            <div class="card mb-4 box-shadow">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal fw-bold text-normal text-center">Rasgulla</h4>
                                </div>
                                <h5 class="card-title pricing-card-title fst-italic text-center my-2">Rs. 15 <small
                                        class="text-muted">/-
                                        pcs</small><br />
                                </h5>
                                <small class="mx-auto">850+ Orders placed from here recently.</small><br />
                                <a href="Buy_form.php" class="mx-auto"><button type="button" class="btn btn-sm btn-block btn-primary">Add to
                                    Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm m-4">
                        <img src="image/gulab-jamun.jpg" alt="gulab-jamun image" class="productImg" />

                        <div class="card-body">
                            <div class="card mb-4 box-shadow">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal fw-bold text-normal text-center">Gulab Jamun</h4>
                                </div>
                                <h5 class="card-title pricing-card-title fst-italic text-center my-2">Rs. 10 <small
                                        class="text-muted">/-
                                        pcs</small><br />
                                </h5>
                                <small class="mx-auto">1290+ Orders placed from here recently.</small><br />
                                <a href="Buy_form.php" class="mx-auto"><button type="button" class="btn btn-sm btn-block btn-primary">Add to
                                    Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm m-4">
                        <img src="image/Rasmalai.jpg" alt="Rasmalai image" class="productImg" />

                        <div class="card-body">
                            <div class="card mb-4 box-shadow">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal fw-bold text-normal text-center">Rasmalai</h4>
                                </div>
                                <h5 class="card-title pricing-card-title fst-italic text-center my-2">Rs. 25 <small
                                        class="text-muted">/-
                                        pcs</small><br />
                                </h5>
                                <small class="mx-auto">675+ Orders placed from here recently.</small><br />
                                <a href="Buy_form.php" class="mx-auto"><button type="button" class="btn btn-sm btn-block btn-primary">Add to
                                    Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm m-4">
                        <img src="image/jalebi.jpg" alt="jalebi image" class="productImg" />

                        <div class="card-body">
                            <div class="card mb-4 box-shadow">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal fw-bold text-normal text-center">Jalebi</h4>
                                </div>
                                <h5 class="card-title pricing-card-title fst-italic text-center my-2">Rs. 10 <small
                                        class="text-muted">/-
                                        pcs</small><br />
                                </h5>
                                <small class="mx-auto">3000+ Orders placed from here recently.</small><br />
                                <a href="Buy_form.php" class="mx-auto"><button type="button" class="btn btn-sm btn-block btn-primary">Add to
                                    Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm m-4">
                        <img src="image/Kurkure.jpg" alt="Kurkure image" class="productImg" />

                        <div class="card-body">
                            <div class="card mb-4 box-shadow">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal fw-bold text-normal text-center">Kurkure</h4>
                                </div>
                                <h5 class="card-title pricing-card-title fst-italic text-center my-2">Rs. 10 <small
                                        class="text-muted">/-
                                        pcs</small><br />
                                </h5>
                                <small class="mx-auto">2675+ Orders placed from here recently.</small><br />
                                <a href="Buy_form.php" class="mx-auto"><button type="button" class="btn btn-sm btn-block btn-primary">Add to
                                    Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm m-4">
                        <img src="image/biscuits.jpg" alt="Biscuits image" class="productImg" />

                        <div class="card-body">
                            <div class="card mb-4 box-shadow">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal fw-bold text-normal text-center">Biscuits</h4>
                                </div>
                                <h5 class="card-title pricing-card-title fst-italic text-center my-2">Rs. 10 <small
                                        class="text-muted">/-
                                        pcs</small><br />
                                </h5>
                                <small class="mx-auto">2450+ Orders placed from here recently.</small><br />
                                <a href="Buy_form.php" class="mx-auto"><button type="button" class="btn btn-sm btn-block btn-primary">Add to
                                    Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm m-4">
                        <img src="image/chips.jpg" alt="Chips image" class="productImg" />

                        <div class="card-body">
                            <div class="card mb-4 box-shadow">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal fw-bold text-normal text-center">Chips</h4>
                                </div>
                                <h5 class="card-title pricing-card-title fst-italic text-center my-2">Rs. 10 <small
                                        class="text-muted">/-
                                        pcs</small><br />
                                </h5>
                                <small class="mx-auto">1775+ Orders placed from here recently.</small><br />
                                <a href="Buy_form.php" class="mx-auto"><button type="button" class="btn btn-sm btn-block btn-primary">Add to
                                    Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm m-4">
                        <img src="image/namkin-mixture.jpg" alt="namkin-mixture image" class="productImg" />

                        <div class="card-body">
                            <div class="card mb-4 box-shadow">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal fw-bold text-normal text-center">Namkin Mixture
                                    </h4>
                                </div>
                                <h5 class="card-title pricing-card-title fst-italic text-center my-2">Rs. 15 <small
                                        class="text-muted">/-
                                        pcs</small><br />
                                </h5>
                                <small class="mx-auto">1675+ Orders placed from here recently.</small><br />
                                <a href="Buy_form.php" class="mx-auto"><button type="button" class="btn btn-sm btn-block btn-primary">Add to
                                    Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm m-4">
                        <img src="image/Haldiram-mixture.jpg" alt="Haldiram-mixture image" class="productImg" />

                        <div class="card-body">
                            <div class="card mb-4 box-shadow">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal fw-bold text-normal text-center">Haldiram's
                                        Mixture</h4>
                                </div>
                                <h5 class="card-title pricing-card-title fst-italic text-center my-2">Rs. 20 <small
                                        class="text-muted">/-
                                        pcs</small><br />
                                </h5>
                                <small class="mx-auto">1450+ Orders placed from here recently.</small><br />
                                <a href="Buy_form.php" class="mx-auto"><button type="button" class="btn btn-sm btn-block btn-primary">Add to
                                    Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Product Container End -->

    <!-- Footer Container Start -->
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4 bg-dark">
            <!-- Left -->
            <div class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div class="text-decoration-none">
                <a href="" class="text-white me-4 text-decoration-none">
                    <i class="fa fa-facebook-f"></i>
                </a>
                <a href="" class="text-white me-4 text-decoration-none">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="" class="text-white me-4 text-decoration-none">
                    <i class="fa fa-google"></i>
                </a>
                <a href="" class="text-white me-4 text-decoration-none">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="" class="text-white me-4 text-decoration-none">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a href="" class="text-white me-4 text-decoration-none">
                    <i class="fa fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">Restaurant Guru</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            A restaurant is a business that prepares and serves food and drinks to customers. Meals are
                            generally served and eaten on the premises, but many restaurants also offer take-out and
                            food delivery services.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Products</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" class="text-white">Snacks</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Sweets</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Namkin</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Biscuits</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Useful links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" class="text-white">Your Account</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Shop</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">About</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Contact Us</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><i class="fa fa-home mr-3"></i> Biharsharif, Bihar 803101, India</p>
                        <p><i class="fa fa-envelope mr-3"></i> kr868606@gmail.com</p>
                        <p><i class="fa fa-phone mr-3"></i> + 91 79911 38707</p>
                        <p><i class="fa fa-print mr-3"></i> + 91 79911 38707</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2022 Copyright:
            <a class="text-white" href="#">RestaurantGuru</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- Footer Container End -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--     
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>