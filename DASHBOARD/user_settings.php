<?php session_start(); 
if (!(isset($_SESSION['role']))) {
    header('Location: ../logout.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="DASHBOARDstyle/stili.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />

    <title>Travel</title>
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
                <a href="login.php">
                    <div class="bx bxs-user" id="UserLogin-icon"></div>
                </a>
                <div class="bx bx-menu" id="menu-icon"></div>

                <a href="/logout.php" style="color:black">
                <i class="bx bx-log-out"></i> Logout
            </a>
            </div>
        </div>

    </header>
    <div class="sidebarANDcontent">
        <div class="sidebarMADH">
            <div class="sidebar">
                <ul class="nav-menu">
                    <li>
                        <a href="/DASHBOARD/index.php">
                            <i class="bx bxs-dashboard"></i> Dashboard
                        </a>
                    </li>
                    <?php if ($_SESSION['role'] == 2): ?>
                    <li>
                        <a href="users.php">
                            <i class="bx bxs-user"></i> Userat
                        </a>
                    </li>
                    <?php endif; ?>
                    <li>
                        <a href="posts.php">
                            <i class="bx bxs-file"></i> Postet
                        </a>
                    </li>
                    
                    <li>
                        <a href="sliderimages.php">
                            <i class="bx bxs-image-alt"></i> SliderImages
                        </a>
                    </li>
                    <?php if ($_SESSION['role'] == 2): ?>
                    <li>
                        <a href="web_settings.php">
                            <i class="bx bxs-cog"></i> WebSettings
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>



        <?php 
        include '../modelcontroller/model.php';
        $model = new Model();


        $logoPath = null;
        if(!empty($_FILES['photo']['tmp_name'])){
            $userlogo = $_FILES['photo']['name'];
            $path = 'uploads/userimg/'.$userlogo;
            move_uploaded_file($_FILES['photo']['tmp_name'], $path);
            $logoPath = $path;
        }

        $updateUser = $model->updateUserSETTINGS($logoPath);
        ?>
        <div class="user-settings-form">
            <div class="photo-preview">
                <?php if(isset($_SESSION['profile']) ){?>
                <img src="<?php echo $_SESSION['profile'] ?>" alt="Profile photooo">
                <?php } else { ?>
                    <img src="/uploads/userimg/userprofile.png" alt="Profile photo">
                <?php  } ?>

            </div>
        <form action="" enctype="multipart/form-data" method="POST">
            <h2 style="text-align:center;">User Settings</h2>
            <div class="form-group">
                <label for="id"><i class='bx bxs-user'></i>ID</label>
                <input type="text" id="id" name="id" value="<?php echo $_SESSION['id'] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="fullname"><i class='bx bxs-user-detail'></i>Full Name</label>
                <input type="text" id="fullname" name="fullname" value="<?php echo $_SESSION['fullname'] ?>">
            </div>
            <div class="form-group">
                <label for="username"><i class='bx bxs-user'></i>Username</label>
                <input type="text" id="username" name="username" value="<?php echo $_SESSION['username'] ?>">
            </div>
            <div class="form-group">
                <label for="email"><i class='bx bxs-envelope'></i>Email</label>
                <input type="email" id="email" name="email" value="<?php echo $_SESSION['email'] ?>">
            </div>
            <div class="form-group">
                <label for="password"><i class='bx bxs-lock-alt'></i>Password</label>
                <input type="password" id="password" name="password" value="<?php echo $_SESSION['password'] ?>">
            </div>
            <div class="form-group">
                <label for="city"><i class='bx bxs-city'></i>City</label>
                <input type="text" id="city" name="city" value="<?php echo $_SESSION['qytety'] ?>">
            </div>
            <div class="form-group">
                <label for="fshat"><i class='bx bxs-flag-alt'></i>Fshati</label>
                <input type="text" id="fshat" name="fshat" value="<?php echo $_SESSION['fshaty'] ?>">
            </div>
            <div class="form-group">
                <label for="zipcode"><i class='bx bxs-map'></i>Zip Code</label>
                <input type="text" id="zipcode" name="zipcode" value="<?php echo $_SESSION['zipkody'] ?>">
            </div>
            <div class="form-group" id="fotoSELECT">
                <label for="photo"><i class='bx bxs-camera'></i>Photo</label>
                <input type="file" id="photo" name="photo" >
            </div>
                <button type="submit" name="SAVEuserSETT"><i class='bx bxs-save'></i>Save Changes</button>
            </div>
        </form>




    </div>
    </div>
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
                <li><a href="about-us.php">Contact Us</a></li>
            </ul>
        </div>

        <div id="Destf" class="foot1">
            <h3>Destinations</h3>
            <li>Paphos</li>
            <li>Paris</li>
            <li>Bali</li>
            <li>Costa Brava</li>
            <li>Edinborough</li>
            <li>Machu Pichu</li>
        </div>
        <div id="offF" class="foot1">
            <h3>Contact Us</h3>
            <li><i class='bx bx-current-location cont'> 4712 Camp Road, Prishtine, Kosove</i></li>
            <li><i class='bx bx-phone cont'> 045-666-765</i></li>
            <li><i class='bx bx-envelope cont'> Turismwebpage@gmail.com</i></li>

        </div>


    </footer>
    <script src="../JS/script.js"></script>
</body>

</html>