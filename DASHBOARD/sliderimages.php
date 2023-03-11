<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="DASHBOARDstyle/stili.css" />
    <link rel="stylesheet" href="DASHBOARDstyle/sliderimages.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="icon" href="img/angry2022logo.png" />

    <title>Travel</title>
</head>

<body>
<header>
        <div class="header">
            <a href="#" class="logo">Travel</a>


            <ul class="navbar">
                <li><a href="home.html">Home</a></li>
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
    <div class="sidebarANDcontent">
        <div class="sidebarMADH">
            <div class="sidebar">
                <ul class="nav-menu">

                    <li>
                        <a href="index.php">
                            <i class="bx bxs-dashboard"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="users.php">
                            <i class="bx bxs-user"></i> Userat
                        </a>
                    </li>
                    <li>
                        <a href="posts.php">
                            <i class="bx bxs-file"></i> Postet
                        </a>
                    </li>
                    
                    <li>
                        <a href="web_settings.php">
                            <i class="bx bxs-cog"></i> PageSettings
                        </a>
                    </li>
                    <li>
                        <a href="sliderimages.php" class="active">
                            <i class="bx bxs-image-alt"></i> SliderImages
                        </a>
                    </li>
                    <li>
                        <a href="sliderimages2.php">
                            <i class="bx bxs-image-alt"></i> SliderImages2
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="slider">
            <div class="slider-images-form">
                <h2>Slider Images</h2>
                <div class="slider-images">
                    <div class="slider-image">
                        <img src="https://via.placeholder.com/150x150" alt="Slider Image"><br>
                        <label for="slider-image-1"><i class='bx bxs-camera'></i></label>
                        <input type="file" id="slider-image-1" name="slider-image-1">
                    </div>
                    <div class="slider-image">
                        <img src="https://via.placeholder.com/150x150" alt="Slider Image"><br>
                        <label for="slider-image-2"><i class='bx bxs-camera'></i></label>
                        <input type="file" id="slider-image-2" name="slider-image-2">
                    </div>
                    <div class="slider-image">
                        <img src="https://via.placeholder.com/150x150" alt="Slider Image"><br>
                        <label for="slider-image-3"><i class='bx bxs-camera'></i></label>
                        <input type="file" id="slider-image-3" name="slider-image-3">
                    </div>
                    <div class="slider-image">
                        <img src="https://via.placeholder.com/150x150" alt="Slider Image"><br>
                        <label for="slider-image-4"><i class='bx bxs-camera'></i></label>
                        <input type="file" id="slider-image-4" name="slider-image-4">
                    </div>
                    <div class="slider-image">
                        <img src="https://via.placeholder.com/150x150" alt="Slider Image"><br>
                        <label for="slider-image-5"><i class='bx bxs-camera'></i></label>
                        <input type="file" id="slider-image-5" name="slider-image-5">
                    </div>
                    <div class="slider-image">
                        <img src="https://via.placeholder.com/150x150" alt="Slider Image"><br>
                        <label for="slider-image-5"><i class='bx bxs-camera'></i></label>
                        <input type="file" id="slider-image-5" name="slider-image-6">
                    </div>


                </div>
            </div>
            <button class="save-button" type="submit"><i class='bx bxs-save'></i>Save Changes</button>
        </div>


    </div>

    <script>
        const imageInputs = document.querySelectorAll(".slider-images input[type=file]");

        imageInputs.forEach(input => {
            input.addEventListener("change", () => {
                const img = input.previousElementSibling;
                const file = input.files[0];
                const reader = new FileReader();

                reader.onload = () => {
                    img.src = reader.result;
                }

                if (file) {
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>



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
                <li><a href="home.html">Home</a></li>
                <li><a href="offers.html">Offers</a></li>
                <li><a href="destinations.html">Destinations</a></li>
                <li><a href="about-us.html">Contact Us</a></li>
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