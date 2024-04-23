<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Green Harvest</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .typing-container {
            text-align: center;
            padding: 20px;
        }

        .typing-text {
            font-size: 24px;
            overflow: hidden;
            white-space: nowrap;
            border-right: 3px solid #333;
            animation: typing 6s steps(40) infinite;
            color: white;
            font-size: 25px;
            font-weight: bold;
        }

        @keyframes typing {
            0% {
                width: 0;
            }
            100% {
                width: 100%;
            }
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="main-bg">
            <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="video-container">
                            <video class="video" autoplay loop muted>
                                <source src="video/crops.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" >
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav-outer">
            <a class="navbar-brand " >
                <img src="img/logo.png" >
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About-us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Our Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <a class="dropdown-item" href="products/vegiseeds.html">Vegetables Seeds</a>
                            <a class="dropdown-item" href="products/flowerseeds.html">Flower Seeds</a>
                            <a class="dropdown-item" href="products/chemicals.html">Agro Chemicals</a>
                            <a class="dropdown-item" href="products/Equipments.html">Agri Equipments</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Sign up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Sign in</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
</div>

<div>
    <section id="hero">
        <h1>Welcome to the Green Harvest Web Application</h1>
            <form class="form-inline">
                <div class="form-group mx-sm-3">
                    <input type="text" class="form-control" id="custom-search" placeholder="Hi!  what you want 'Search' here">
                </div>
            </form>
             <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 typing-container">
                        <p class="typing-text">At Green Harvest, we're passionate about cultivating a greener future through sustainable agriculture practices.</p>
                </div>
            </div>
        </div>
    </section>
   
</div>

<div class="posts">
    <div class="card mb-3">
    <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Welcome to Green Harvest - Your Sustainable Agriculture Solution!</h5>
        <p class="card-text">At Green Harvest, we're passionate about cultivating a greener future through sustainable agriculture practices. Our web application is designed to empower farmers, gardeners, and agricultural enthusiasts with the tools and knowledge they need to grow healthy, abundant crops while minimizing environmental impact.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 1 month ago</small></p>
    </div>
    </div>
    <div class="card mb-3">
    <img src="https://images.unsplash.com/photo-1559884743-74a57598c6c7?q=80&w=1476&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Features of Green Harvest Web Application:</h5>
        <p class="card-text">Plan your crops efficiently using our intuitive crop planning tool. Select from a wide variety of crops, and we'll provide you with detailed information on planting times, spacing, and companion planting suggestions.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 2 month ago</small></p>
    </div>
    </div>
</div>

<!--footer start-->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/logo.png" alt="" >
                            <h4>Contact Us </h4>
                            <p>Email: <a href="info@greenharvest.lk"> info@greenharvest.lk</a> </p>
                            <p>Phone: <a href="0767668187"> 011-5567890</a></p>
                        </div>
                        <div class="col-md-4">
                            <h4>Quick Links</h4>
                            <ul class="list-unstyled">
                                <li><a href="index.html"><i class="fa-solid fa-house fa-md" style="color: #24272b;"></i>Home</a></li>
                                <li><a href="about.php"><i class="fa-solid fa-globe fa-md  " style="color: #24272b;"></i>About</a></li>
                                <li><a href="#"><i class="fa-regular fa-gear fa-md" style="color: #24272b;"></i> Services</a></li>
                                <li><a href="contact.php"><i class="fa-solid fa-address-book fa-md" style="color: #24272b;"></i>Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4>Follow Us</h4>
                            <div class="links">
                                <a href="#"><i class="fa-brands fa-facebook fa-beat fa-xl" style="color: #045df6;"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter fa-beat fa-xl" style="color: #00ccff;"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin fa-beat fa-xl" style="color: #3e69b1;"></i></a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="container" id="copyright">
                        <div class="row">
                            <div class="col-md-6" align="right" >
                                <p>&copy; 2024 All rights reserved. Dulya Nethmi Siyara Web Development</p>
                            </div>
                            <div class="col-md-6 text-md-right" align="left">
                                <p>Terms of Service | Privacy Policy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>



<!--footer end-->


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/51babe4472.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="script/main.js"></script>
</body>
</html>