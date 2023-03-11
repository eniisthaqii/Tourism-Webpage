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
</head>

<body>
    <header>
        <div class="header">
            <a href="#" class="logo">Travel</a>


            <ul class="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="offers.html">Offers</a></li>
                <li><a href="destinations.html">Destination</a></li>
                <li><a href="about-us.html">Contact us</a></li>
            </ul>
            <div class="nav-logreg">
                <a href="login.html">
                    <div class="bx bxs-user" id="UserLogin-icon"></div>
                </a>
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

            <a href="offers.html">
                <tag class="tagd">Click here to book your offer!</tag>
            </a>
        </div>
    </main>
    
    <?php

    include 'includes/footer.php';

    ?>

    <!-- linku i js-->
    <script src="JS/script.js"></script>
    <script src="JS/destinations_slider.js"></script>
    <!-- linku i js-->

</body>

</html>