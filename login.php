<?php session_start(); ?>
<?php include 'modelcontroller/model.php'; ?>
<?php  
if (isset($_SESSION['role'])) {
    header('Location: /DASHBOARD/');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
    <!-- linku i css-->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/login.css">
    <!-- linku i css-->

    <!-- linku i ikonave-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- linku i ikonave-->

    <!-- Google-fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&
        family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Google-fonts-->
</head>

<body>
    <!--Header-->

    <header>
        <div class="header">
            <a href="index.php" class="logo">Travel</a>


            <ul class="navbar">
                <li><a href="home.php">Home</a></li>
                <li><a href="offers.php">Offers</a></li>
                <li><a href="destinations.php">Destination</a></li>
                <li><a href="about-us.php">Contact us</a></li>
            </ul>
            <div class="nav-logreg">
                <a href="Login.php">
                    <div class="bx bxs-user" id="UserLogin-icon"></div>
                </a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </div>

    </header>

    <!--Header-->

    <!--Home-->
    <div id="loginform">
        <div id="loginform1">
            <h1><b>LOGIN</b></h1>
            <h6>New to OUR PAGE? <a href="register.php"><strong style="color: #094f8d;">Create an account!</strong></a>
            </h6>
            <?php
  
              $loginy = $modeli->loginUser();
        ?>
        <form action="" method="post">
            <input class="empws" id="em1" type="email" name="emaili" placeholder="Enter email"><br>
            <input class="empws" id="pw1" type="password" name="passwordi" placeholder="Enter password"><br>
            <input class="empws" id="submiti" type="submit" name="loginUsery" value="Login" onclick="validoMeRegex()"><br>
            </form>
        </div>
    </div>

    <!-- category section starts  -->

    <div class="category">

        <h1 class="heading">adventure idea!</h1>

        <div class="box-container">

            <div class="box">
                <img src="img/category-1.jpg" alt="">
                <h3>bungee jump</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="img/category-2.jpg" alt="">
                <h3>zip lines</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
                <a href="#" class="btn">read more</a>
            </div>



            <div class="box">
                <img src="img/category-4.jpg" alt="">
                <h3>kayaking</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
                <a href="#" class="btn">read more</a>
            </div>

        </div>

    </div>


    <div class="container">
        <p class="txt">Plan your trip</p>
        <a href="#" id="Dest-homelink">View all Destinations</a>
        <h2>Where to next?</h2>
        <div class="img-container">
            <ul class="img-list">
                <li>
                    <article class="articles"><a href="#"><img src="img/Venice.jpg" alt="Venice" class="bw"><br>
                            <p>Venice</p>
                        </a></article>
                </li>
                <li>
                    <article class="articles"><a href="#"><img src="img/Paris-2.jpg" alt="Paris" class="bw">
                            <p>Paris</p>
                        </a></article>
                </li>
                <li>
                    <article class="articles"><a href="#"><img src="img/London.jpg" alt="London" class="bw">
                            <p>London</p>
                        </a></article>
                </li>
                <li>
                    <article class="articles"><a href="#"><img src="img/Frankfurt.jpg" alt="Frankfurt" class="bw">
                            <p>Frankfurt</p>
                        </a></article>
                </li>
            </ul>

        </div>
    </div>


    <!--Home-->


    <!--Footer-->
    <footer>
        <div id="SOCIALMEDIA" class="foot1">
            <div class="socialmedia">
                <h3>Social Media</h3>
            </div>
            <div id="mediat">
                <li><a href="#">
                        <h1><i class='bx bxl-instagram'
                                onmouseover="this.style.background='linear-gradient(to bottom, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%)'; this.style.color='transparent'; this.style.WebkitBackgroundClip='text'; "
                                onmouseout="this.style.color='white'"></i></h1>
                    </a></li>
                <li><a href="#">
                        <h1><i class='bx bxl-youtube' onmouseover="this.style.color='red'"
                                onmouseout="this.style.color='white'"></i></h1>
                    </a></li>
                <li><a href="#">
                        <h1><i class='bx bxl-twitter' onmouseover="this.style.color='rgb(29, 155, 240)'"
                                onmouseout="this.style.color='white'"></i></h1>
                    </a></li>
                <li><a href="#">
                        <h1><i class='bx bxl-twitch' onmouseover="this.style.color='#5c16c5'"
                                onmouseout="this.style.color='white'"></i></h1>
                    </a></li>
                <li><a href="#">
                        <h1><i class='bx bxl-facebook' onmouseover="this.style.color='#385898'"
                                onmouseout="this.style.color='white'"></i></h1>
                    </a></li>
                <li><a href="#">
                        <h1><i class='bx bxl-discord' onmouseover="this.style.color='#5865f2'"
                                onmouseout="this.style.color='white'"></i></h1>
                    </a></li>
            </div>
        </div>
        <div class="foot1">
            <h3>Travel</h3>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="offers.php">Offers</a></li>
                <li><a href="destinations.php">Destinations</a></li>
                <li><a href="about-us.php">About us</a></li>
            </ul>
        </div>
        <div id="offF" class="foot1">
            <h3>Offers</h3>
            <li><a href="#">Places</a></li>
            <li><a href="offers.php">offers</a></li>
            <li><a href="#">Lifestyle</a></li>
            <li><a href="#">Help</a></li>
        </div>
        <div id="Destf" class="foot1">
            <h3>Destinations</h3>
            <li><a href="#">Venice</a></li>
            <li><a href="#">Paris</a></li>
            <li><a href="#">London</a></li>
            <li><a href="#">Frankfurt</a></li>
        </div>


    </footer>
    <!--Footer-->

    <!-- linku i js-->
    <script src="JS/loginScript.js"></script>
    <!-- linku i js-->
</body>

</html>