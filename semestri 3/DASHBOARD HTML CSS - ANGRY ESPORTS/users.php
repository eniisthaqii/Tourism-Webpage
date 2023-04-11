<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="DASHBOARDstyle/stili.css" />
    <link rel="stylesheet" href="DASHBOARDstyle/userat.css">
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
                        <a href="users.php" class="active">
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
            <div class="modal hidden">
                <div class="modal-content">
                    <div class="formSHTIMIuserav">
                        <span class="close-modal">&times;</span>
                        <label style="font-size: 1.5em;" for="newpostttt"><i class='bx bxs-user'></i>Add New
                            User</label>
                        <br><br>
                        <div class="form-group">
                            <label for="fullname"><i class='bx bxs-user-detail'></i>Full Name</label>
                            <input type="text" id="fullname" name="fullname" required>
                        </div>
                        <div class="form-group">
                            <label for="username"><i class='bx bxs-user'></i>Username</label>
                            <input type="text" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class='bx bxs-envelope'></i>Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password"><i class='bx bxs-lock-alt'></i>Password</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="city"><i class='bx bxs-city'></i>City</label>
                            <input type="text" id="city" name="city">
                        </div>
                        <div class="form-group">
                            <label for="fshat"><i class='bx bxs-flag-alt'></i>Fshati</label>
                            <input type="text" id="fshat" name="fshat">
                        </div>
                        <div class="form-group">
                            <label for="zipcode"><i class='bx bxs-map'></i>Zip Code</label>
                            <input type="text" id="zipcode" name="zipcode">
                        </div>
                        <div class="form-group">
                            <label for="role"><i class='bx bxs-user-detail'></i>Role</label>
                            <select id="role" name="role" required>
                                <option value="" selected disabled>Select role</option>
                                <option value="admin">Admin</option>
                                <option value="player">Player</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="photo"><i class='bx bxs-camera'></i>Photo</label>
                            <input type="file" id="photo" name="photo">
                        </div>
                        <button type="submit">Add User</button>
                        <br><br><br>
                    </div>

                </div>
            </div>
            <div class="overlay hidden"></div>


            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>City</th>
                        <th>Fshati</th>
                        <th>Zipcode</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img src="https://via.placeholder.com/150x150" alt="Placeholder Image"></td>
                        <td>John Doe</td>
                        <td>jdoe</td>
                        <td>jdoe@example.com</td>
                        <td>********</td>
                        <td>New York</td>
                        <td>Manhattan</td>
                        <td>10001</td>
                        <td>Admin</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img src="https://via.placeholder.com/150x150" alt="Placeholder Image"></td>
                        <td>Jane Smith</td>
                        <td>jsmith</td>
                        <td>jsmith@example.com</td>
                        <td>********</td>
                        <td>San Francisco</td>
                        <td>Marina</td>
                        <td>94123</td>
                        <td>Admin</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><img src="https://via.placeholder.com/150x150" alt="Placeholder Image"></td>
                        <td>Bob Johnson</td>
                        <td>bjohnson</td>
                        <td>bjohnson@example.com</td>
                        <td>********</td>
                        <td>Chicago</td>
                        <td>Loop</td>
                        <td>60601</td>
                        <td>Player</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><img src="https://via.placeholder.com/150x150" alt="Placeholder Image"></td>
                        <td>Bob Johnson</td>
                        <td>bjohnson</td>
                        <td>bjohnson@example.com</td>
                        <td>********</td>
                        <td>King</td>
                        <td>Shkarashnik</td>
                        <td>24000</td>
                        <td>Player</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><img src="https://via.placeholder.com/150x150" alt="Placeholder Image"></td>
                        <td>Bob Johnson</td>
                        <td>bjohnson</td>
                        <td>bjohnson@example.com</td>
                        <td>********</td>
                        <td>King</td>
                        <td>Shkarashnik</td>
                        <td>24000</td>
                        <td>Player</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><img src="https://via.placeholder.com/150x150" alt="Placeholder Image"></td>
                        <td>Bob Johnson</td>
                        <td>bjohnson</td>
                        <td>bjohnson@example.com</td>
                        <td>********</td>
                        <td>King</td>
                        <td>Shkarashnik</td>
                        <td>24000</td>
                        <td>Player</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <script src="../script/script.js"></script>
    <script src="/dashboard/DASHBOARDscript/userat.js"></script>
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
</html>