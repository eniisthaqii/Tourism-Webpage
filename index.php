<?php session_start(); ?>
<?php include 'modelcontroller/model.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
    <!-- linku i css-->
    <link rel="stylesheet" href="CSS/style.css">
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
            <a href="#" class="logo">Travel</a>


            <ul class="navbar">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="offers.php">Offers</a></li>
                <li><a href="destinations.php">Destination</a></li>
                <li><a href="about-us.php">Contact us</a></li>
            </ul>
            <div class="nav-logreg">
                <a href="login.php">
                    <div class="bx bxs-user" id="UserLogin-icon"></div>
                </a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </div>

    </header>

    <!--Header-->

    <!--Home-->
    <main>
        <!--Image slider-->
        <div id="slider">
            <img src="" id="img" alt="Slider">
        </div>
        <!--Image slider-->
    </main>


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
        <a href="destinations.php" id="Dest-homelink">View all Destinations</a>
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


    <?php

    include 'includes/footer.php';

    ?>

<script> 
      <?php 
        
        $slidet = $modeli->fetchSlider();
      ?>
      //SCRIPTA per IMGslider
      var varguImg = [];
      
      <?php foreach($slidet as $row){?>
      varguImg.push("DASHBOARD/<?php echo $row['imgpath']; ?>");<?php }?>

        var index = 0;
        const koha = 5000;

        function krijoSlider() {
          document.getElementById("imazhi").src = varguImg[index];
          index++;

          if (index == varguImg.length) {
            index = 0;
          }

          setTimeout("krijoSlider()", koha);

          console.log(varguImg.length);
          console.log("sdsdsd");
        }

        krijoSlider();</script>
    
    <!-- linku i js-->
    <script src="JS/script.js"></script>
    <!-- linku i js-->
</body>

</html>