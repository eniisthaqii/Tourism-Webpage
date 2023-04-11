<?php 

session_start(); 

if (!(isset($_SESSION['role']))) {
    header('Location: ../logout.php');
    exit;
}

if ($_SESSION['role'] != 2) {
    header('Location: /DASHBOARD/index.php');
    exit;
}
?>
<?php include '../modelcontroller/model.php'; ?>

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
    <?php 
        $modeli = new Model();
        $webLogo = $modeli->fetchWebSettings();

        if(!empty($webLogo)){
          foreach($webLogo as $row){
            
    ?>

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
                <div class="bx bx-menu" id="menu-icon"></div>

                <?php 
        if (isset($_SESSION['role'])) {
          ?>
          <div class="fotoLogOut">
                <a href="user_settings.php">
                  <img src="<?php echo $_SESSION['profile'] ?>" alt="Placeholdeer Image" style="height: 50px;width: 50px;border-radius: 50%;overflow: hidden" />
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
                    <?php if ($_SESSION['role'] == 2): ?>
                    <li>
                        <a href="users.php" class="active">
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

        <div class="shtimiKlientav">
            <a href="#" class="btn-add-new">Add New</a>
            <div class="modal hidden">
                <div class="modal-content">
                    <div class="formSHTIMIuserav">
                        <span class="close-modal">&times;</span>
                        <label style="font-size: 1.5em;" for="newpostttt"><i class='bx bxs-user'></i>Add New
                            User</label>
                        <br><br>
                        <?php
                            $model = new Model();
                            $shtoUseryn = $model->insertUseryy();
                        ?>
                        
                        <form action="" method="POST" enctype="multipart/form-data">
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
                                <option value="Admin">Admin</option>
                                <option value="Player">Player</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="photo"><i class='bx bxs-camera'></i>Photo</label>
                            <input type="file" id="photo" name="photoUser">
                        </div>
                        <button name="shtojeUserin" type="submit">Add User</button>
                        <br><br><br>
                        </form>
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
                    <?php
                    $rows = $model->fetchUsers();
                    $i = 1;
                    if(!empty($rows)){
                    foreach($rows as $row){ 
                    ?>
                    <tr>
                    <td><?php echo $i++; ?></td>
                    <?php if($row['profili'] != null){?>
                            <td><img src="/dashboard/<?php echo $row['profili']; ?>" alt="Photo"></td>
                        <?php } else{?>
                            <td><img src="/dashboard/uploads/userimg/userprofile.png" alt="Placeholder Image"></td>
                        <?php } 
                        ?>
                    
                    <td><?php echo $row['fullname']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['qyteti']; ?></td>
                    <td><?php echo $row['fshati']; ?></td>
                    <td><?php echo $row['zipkodi']; ?></td>
                    <td><?php echo $row['roli']; ?></td>
                    <td>

                    <button name="editButton" onclick="window.location.href = 'edit_user.php?id=<?php echo $row['id']; ?>'">Edit</button>
                    <button class="delete-btn" name='deleteButton' onclick="window.location.href = 'delete_user.php?id=<?php echo $row['id']; ?>'">Delete</button>
                    </td>
                    </tr>

                    <?php
                    }
                    }else{
                    echo "no data";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
    
    <script src="../js/script.js"></script>
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