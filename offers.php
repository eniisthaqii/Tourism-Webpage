<?php session_start(); ?>
<?php include 'modelcontroller/model.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offers</title>
    <!-- linku i css-->
    <link rel="stylesheet" href="CSS/style.css">
    <!-- linku i css-->
    <script src="https://kit.fontawesome.com/1817fca7a4.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <?php 
        $modeli = new Model();
        $webLogo = $modeli->fetchWebSettings();

        if(!empty($webLogo)){
          foreach($webLogo as $row){
            
    ?>
</head>

<body>
    <!--Header-->

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

    <!--Header-->

    <div class="titleO" id="title">
        <div class="textO">
            <h1>
                Welcome to Travel!
            </h1>
            <h4>Choose your offer!</h4>
            <p>
                Take a look at the best options, choose one<br>and experience a once-in-a-lifetime adventure..
            </p>
        </div>


    </div>

    <section class="offers" id="offers">

        <div class="containerO" id="offers-container">

            <div class="box-offer" id="paphos">
                <img src="img/offer-images\paphos.jpg">
                <h3>
                    Paphos, Cyprus
                </h3>

                Head out into the Troodos Mountains and experience sightseeing and a culinary adventure! View the town
                in a 360 degree view! The cypriots are waiting for you..
                <br>
                <a href="#down">

                    <button class="book-button">Book tickets</button>
                </a>
            </div>

            <div class="box-offer" id="paris">
                <img src="img/offer-images\paris.jpg">
                <h3>
                    Paris, France
                </h3>
                The city lures with its magnificent art, architecture, culture, and cuisine, but there’s also more magic
                waiting to be explored. Don't miss out on the parisian dream!
                <br>
                <a href="#down">
                    <button class="book-button">Book tickets</button>
                </a>
            </div>

            <div class="box-offer" id="bali">
                <label>
                    <img src="img/offer-images\bali.jpg">
                    <h3>
                        Bali, Indonesia
                    </h3>
                    Dazzling beaches beckon the sun seekers and surfers along the island’s southwest coast, while
                    ancient temples and a thriving wellness scene draw travelers inland.
                    <br>
                    <a href="#down">
                        <button class="book-button">Book tickets</button>
                    </a>
            </div>



            <div class="box-offer" id="costabrava">
                <img src="img/offer-images\costabrava.jpg">
                <h3>
                    Costa Brava, Spain
                </h3>
                Situated in the east of the country overlooking the Mediterranean Sea, the Costa Brava region enjoys hot
                summers and mild winters.
                <br>
                <a href="#down">
                    <button class="book-button">Book tickets</button>
                </a>
            </div>

            <div class="box-offer" id="edinborough">
                <img src="img/offer-images\edinborough.jpg">
                <h3>
                    Edinborough, Scotland
                </h3>
                Discover one of the oldest cities in the UK, which is known for its stunning architecture, stunning
                views, and vibrant culture. With this offer, you will feel like you are a royal!
                <br>
                <a href="#down">
                    <button class="book-button">Book tickets</button>
                </a>

            </div>

            <div class="box-offer" id="machupichu">
                <img src="img/offer-images\machupichu.jpg">
                <h3>
                    Machu Pichu, Peru
                </h3>
                Discover the mysticism and magic of this world wonder. Visit this unique place and share a mystic
                adventure. The gorgeous view will make you want to visit 100 times.
                <br>
                <a href="#down">
                    <button class="book-button">Book tickets</button>
                </a>
            </div>

            <div class="box-offer" id="venice">
                <img src="img/offer-images\venice.jpg">
                <h3>
                    Venice, Italy
                </h3>
                An essential Venice experience on a gondola ride along the Grand Canal and smaller, scenic waterways.
                Delve into the history and lore of the Jewish Ghetto, Cannaregio, and San Polo districts.
                <br>
                <a href="#down">
                    <button class="book-button">Book tickets</button>
                </a>
            </div>

            <div class="box-offer" id="london">
                <img src="img/offer-images\london.jpg">
                <h3>
                    London, United Kingdom
                </h3>
                From the modern London Eye to the historic Tower of London, tourist attractions in London are a must-see
                on any London sightseeing trip. Even better, many London landmarks are free to visit.
                <br>
                <a href="#down">
                    <button class="book-button">Book tickets</button>
                </a>
            </div>

            <div class="box-offer" id="frankfurt">
                <img src="img/offer-images\frankfurt.jpg">
                <h3>
                    Frankfurt, Germany
                </h3>
                Do you love castles views, wine and cruising along the vines? Join a wine fuelled experience to the
                beautiful UNESCO city of Heidelberg and its surrounding wine regions.
                <br>
                <a href="#down">
                    <button class="book-button">Book tickets</button>
                </a>
            </div>

        </div>

    </section>

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
    <!-- linku i js-->
</body>

</html>