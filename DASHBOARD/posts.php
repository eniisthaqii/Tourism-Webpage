<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="DASHBOARDstyle/stili.css" />
    <link rel="stylesheet" href="DASHBOARDstyle/postet.css">
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
                        <a href="posts.php" class="active">
                            <i class="bx bxs-file"></i> Postet
                        </a>
                    </li>
                    <li>
                        <a href="web_settings.php">
                            <i class="bx bxs-cog"></i> PageSettings
                        </a>
                    </li>
                    <li>
                        <a href="sliderimages.php">
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
        <div class="shtimiKlientav">

            <a href="#" class="btn-add-new">Add New</a>
            <!-- Modal for adding new post -->
            <div class="modal hidden">
                <div class="modal-content">
                    <form id="add-post-form">

                        <label style="font-size: 1.5em;" for="newpostttt"><i class='bx bxs-file'></i>Add New
                            Post</label>
                        <br>
                        <span class="close-modal">&times;</span>
                        <label for="year">Year:</label>
                        <input type="text" id="year" name="year" required>
                        <label for="content">Content:</label>
                        <textarea id="content" name="content" required></textarea><br>
                        <button type="submit">Add Post</button>
                    </form>
                </div>
            </div>
            <div class="overlay hidden"></div>
            <!-- Modal for adding new post -->
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>YEAR</th>
                        <th>Content </th>
                        <th>Post Author</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2018</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quibusdam dicta reiciendis nisi, dolor saepe eligendi, quia enim illum corrupti quae tempore illo ad consequatur cum consectetur, molestias esse exercitationem.
                        Lorem ipsum dolor sit amet consecteturadipisicing elit. Nisi quod quos voluptasearum. Corrupti iure provident, minima illoiusto eligendi cum maxime odit exercitationemunde quidem blanditiis iste fuga quisquam!
                        Lorem ipsum dolor, sit amet consecteturadipisicing elit. Cumque, consequuntur rerumducimus voluptatibus consequatur quas optioplaceat recusandae asperiores sint hic, illumdoloribus alias atque obcaecati nisi nullafugiat nobis.
                        </td>
                        <td>jdoe@example.com</td>
                        <td>
                            <button class="btn-edit">Edit</button>
                            <button class="btn-delete">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2019</td>
                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</td>
                        <td>jdoe@example.com</td>
                        <td>
                            <button class="btn-edit">Edit</button>
                            <button class="btn-delete">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2020</td>
                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</td>
                        <td>jdoe@example.com</td>
                        <td>
                            <button class="btn-edit">Edit</button>
                            <button class="btn-delete">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>2021</td>
                        <td>jdoejdoejdoejdoejdoejdoejdoejdoejdoejdoejdoejdoejdoejdoejdoejdoejdoejdoejdoe</td>
                        <td>jdoe@example.com</td>
                        <td>
                            <button class="btn-edit">Edit</button>
                            <button class="btn-delete">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>2022</td>
                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</td>
                        <td>jdoe@example.com</td>
                        <td>
                            <button class="btn-edit">Edit</button>
                            <button class="btn-delete">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>2023</td>
                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</td>
                        <td>jdoe@example.com</td>
                        <td>
                            <button class="btn-edit">Edit</button>
                            <button class="btn-delete">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>



    </div>

    <script src="../JS/script.js"></script>
    <script src="/DASHBOARD/DASHBOARDscript/postet.js"></script>
</body>


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

</html>