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
    <title>About Us</title>
</head>

<body>
    <section id="header">
        <img src="image/logo.JPG" alt="logo" />
    </section>
    <!-- Nav bar Start  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fs-5">
        <div class="container-fluid">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
                            <li><a class="dropdown-item" href="snacks.php">Namkin Mixture</a></li>
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
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact Us</a>
                    </li>
                </ul>
                <a href=""><img src="image/kart-icon.jpg" alt="Kart icon" class="mykart mykart-icon2 mx-2" /></a>
                <form class="d-flex">
                    <button class="btn btn-danger rounded-pill" data-bs-toggle="modal" data-bs-target="#loginModal"
                        type="button">Admin Login</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- navbar End  -->


    <!-- loginForm Modal Strat -->
    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login Here</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="loginphp.php" method="post">
                        <div class="mb-3">
                            <small style="color:red;">All field are required, please fill Correct Details.</small><br/><br/>
                            <label for="exampleInputEmail1" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="uname"/>
                            <div id="emailHelp" class="form-text">We'll never share your user name and password with
                                anyone else.</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="upass"/>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="member" value="Yes" id="flexRadioDefault1"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Are you a shop member?
                            </label>
                        </div>

                        <div class="modal-footer my-2">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- loginForm Modal End -->


    <!-- About Us Container Start -->
    <div class="about-section">
        <h1>About Us</h1>
        <p>A restaurant is a business that prepares and serves food and drinks to customers. Meals are generally served
            and eaten on the premises, but many restaurants also offer take-out and food delivery services.A restaurant
            is a business that prepares and serves food and drinks to customers. Meals are generally served and eaten on
            the premises, but many restaurants also offer take-out and food delivery services.</p>
        <p>Welcome back again.!</p>
    </div>

    <h2 style="text-align:center">Our Team</h2>
    <div class="row m-5">
        <div class="column">
            <div class="card">
                <img src="image/Rockey.jpg" alt="Raju Image" style="width:100%; height: 50vh;" />
                <div class="container">
                    <h2>Raju Shriwastav</h2>
                    <p class="title">Founder</p>
                    <p>The Founder is a 2016 American biographical drama film directed by John Lee Hancock and written
                        by Robert Siegel. Starring Michael Keaton as businessman Ray Kroc, the film portrays the story
                        of his creation of the McDonald's fast-food restaurant chain.</p>
                    <p>raju@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="image/raju.jpg" alt="Rockey Image" style="width:100%; height:50vh;">
                <div class="container">
                    <h2>Rockey</h2>
                    <p class="title">Manager</p>
                    <p>The Founder is a 2016 American biographical drama film directed by John Lee Hancock and written
                        by Robert Siegel. Starring Michael Keaton as businessman Ray Kroc, the film portrays the story
                        of his creation of the McDonald's fast-food restaurant chain.</p>
                    <p>rockey@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="image/kundan.jpg" alt="kundan" style="width:100%; height:50vh;">
                <div class="container">
                    <h2>Kundan</h2>
                    <p class="title">Designer & Developer</p>
                    <p>A developer is an individual builds and create software and applications. He writes, debugs
                        and executes the source code of a software application. A developer is also known as a
                        software developer, computer programmer, software coder or software engineer.</p>
                    <p>kr868606@gmail.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Container End -->


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