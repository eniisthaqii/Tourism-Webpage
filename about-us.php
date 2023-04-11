<?php session_start(); ?>
<?php include 'modelcontroller/model.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Destinations</title>
    <!-- linku i css-->
    <link rel="stylesheet" href="CSS/style.css">
    <!-- linku i css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
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


    <div class="containerA">
        <h2>Contact Us</h2>
        <p>We will help you with everything you need! Please contact us for any further information</p>
        <div class="contact-info">
            <h3>Address</h3>
            <p>4712 Camp Road , <br>Prishtine , Kosove , <br>55060</p>
            <h3>Phone </h3>
            <p>045-666-765</p>
            <h3>Email</h3>
            <p>Turismwebpage@gmail.com</p>
        </div>

    </div>
    <script src="destinations_function.js"></script>
</body>

</html>