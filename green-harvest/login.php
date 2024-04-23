<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/login.css">
</head>

<body>
<!--main-view start-->
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
<!--main-view end-->

<!--Nav bar start-->

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
                        <a class="nav-link" href="login.php">Sign-in</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
</div>
<!--nav bar end-->

<div class="container">
    <?php
    session_start();
    ?>

    <?php
    if (isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        require_once "connection.php";
        if ($email=='admin@gmail.com'&& $password=="1234"){
            /* session_start();
             $_SESSION["user"] = "yes";*/
            header("Location:admin.php");
            die();
        }
        if ($email=='fo@gmail.com'&& $password=="1234"){
            /* session_start();
             $_SESSION["user"] = "yes";*/
            header("Location:feildofficer.php");
            die();
        }


        else{
            $sql = "SELECT * FROM user WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";

                    header("Location: home.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }

    }
    ?>



<!--Login box Start-->
<selection>
    <div class="login-box">
        <form action="loginprocess.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="email" name="email" required>
                <label>Email</label>
            </div>

            <div class="input-box">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>

            <div class="remember-frogot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>

            <button type="submit" name="login">Login</button>
            <div class="Regiter-Link">
                <p>Don't have an account? <a href="register.php"> Register</a></p>
            </div>
        </form>
    </div>
</selection>
</div>
<!--Login Box End-->

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
</body>
</html>