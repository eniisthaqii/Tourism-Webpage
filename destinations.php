<?php session_start(); ?>
<?php include 'modelcontroller/model.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>
    <link href="CSS/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/1817fca7a4.js" crossorigin="anonymous"></script>
    <?php 
        $modeli = new Model();
        $webLogo = $modeli->fetchWebSettings();

        if(!empty($webLogo)){
          foreach($webLogo as $row){
            
    ?>
</head>

<body>
    <header>
        <div class="header">
            <a href="#" class="logo">Travel</a>


            <ul class="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="offers.php">Offers</a></li>
                <li><a href="destinations.php">Destination</a></li>
                <li><a href="about-us.php">Contact us</a></li>
            </ul>
            <div class="nav-logreg">
            <?php 
        if (isset($_SESSION['role'])) {
          ?>
          <div class="fotoLogOut">
                <a href="dashboard/">
                  <img src="dashboard/<?php echo $_SESSION['profile'] ?>" alt="Placeholder Image" style="height: 50px;width: 50px;border-radius: 50%;overflow: hidden" />
                </a>
                <a href="/logout.php" style="color:black">
                      <i class="bx bx-log-out"></i> Logout
                </a>
            </div>
          <?php
        }
        else{
          ?>
          <a href="/login.php"><img src="/img/bxs-user.svg" alt="LOGIN" style="height: 30px"/></a>
          <?php
        }}}
        ?>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
            
        </div>

    </header>
    <main class="maind">

        <div class="containerd">
            <div class="sliderd">
                <h1 class="h1d">
                    Check out our destinations..
                </h1>

                <img src="img/cyprus.JPG" id="image">

                <div class="captiond">
                    <button class="buttond" id="previous">Previous</button>
                    <button class="buttond" id="next">Next</button>
                </div>
            </div>

            <a href="offers.php">
                <tag class="tagd">Click here to book your offer!</tag>
            </a>
        </div>
    </main>
    
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
                <li><a href="index.html">Home</a></li>
                <li><a href="offers.html">Offers</a></li>
                <li><a href="destinations.html">Destinations</a></li>
                <li><a href="about-us.html">About us</a></li>
            </ul>
        </div>
        <div id="offF" class="foot1">
            <h3>Offers</h3>
            <li><a href="#">Places</a></li>
            <li><a href="offers.html">offers</a></li>
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
    <script src="JS/script.js"></script>
    <script src="JS/destinations_slider.js"></script>
    <!-- linku i js-->

</body>

</html>