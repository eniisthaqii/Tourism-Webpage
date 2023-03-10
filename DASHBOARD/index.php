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
            <a href="../index.php" class="logo">Travel</a>


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
                        <a href="/DASHBOARD/index.php" class="active">
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
            $rows = $model->counterUserPostTrophySlider();
        ?>
        <div class="dashboard">

            <h2>Hello,<?php echo $_SESSION['fullname'] ?></h2>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3>Users</h3>
                            <i class='bx bx-user'></i>
                        </div>
                        <div class="card-body">
                        
                        <?php if ($rows): ?>
                        <h2><?php foreach($rows as $row){ 
                            echo $row['user_count'];
                        }?></h2>
                        <?php else: ?>
                        <p>No data found.</p>
                        <?php endif; ?>
                            <a href="users.php" class="btn-view-details">
                                <i class='bx bx-show'></i>
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3>Posts</h3>
                            <i class='bx bx-file'></i>
                        </div>
                        <div class="card-body">
                            <?php if ($rows): ?>
                            <h2><?php foreach($rows as $row){ 
                                echo $row['post_count'];
                            }?></h2>
                            <?php else: ?>
                            <p>No data found.</p>
                            <?php endif; ?>
                            <a href="posts.php" class="btn-view-details">
                                <i class='bx bx-show'></i>
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3>Trophy</h3>
                            <i class='bx bx-trophy'></i>
                        </div>
                        <div class="card-body">
                            <?php if ($rows): ?>
                            <h2><?php foreach($rows as $row){ 
                                echo $row['trophy_count'];
                            }?></h2>
                            <?php else: ?>
                            <p>No data found.</p>
                            <?php endif; ?>
                            <a href="trofet.php" class="btn-view-details">
                                <i class='bx bx-show'></i>
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3>Slider Images</h3>
                            <i class='bx bxs-image-alt'></i>
                        </div>
                        <div class="card-body">
                            <?php if ($rows): ?>
                            <h2><?php foreach($rows as $row){ 
                                echo $row['slider_count'];
                            }?></h2>
                            <?php else: ?>
                            <p>No data found.</p>
                            <?php endif; ?>
                            <a href="sliderimages.php" class="btn-view-details">
                                <i class='bx bx-show'></i>
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3>Web Settings</h3>
                            <i class='bx bx-cog'></i>
                        </div>
                        <div class="card-body">
                            <h2>!</h2>
                            <a href="web_settings.php" class="btn-view-details">
                                <i class='bx bx-show'></i>
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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