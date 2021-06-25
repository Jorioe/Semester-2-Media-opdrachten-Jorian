<?php
session_start();

include("connection.php");
include("admin-login-functions.php");

$sql = "SELECT * FROM admin";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    /*echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";*/
  }
} else {
  echo "0 results";
}


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //iets is gepost
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password))
    {
        //echo "henk";
        
        //lezen van database
        $sql = "SELECT * FROM admin WHERE username = '" . $username . "'";
        $result = $con->query($sql);
        
        if ($result->num_rows > 0) 
        {
            //echo "JAn";
            $admin_data = $result->fetch_assoc();
            
            if($admin_data['verify'] == 0)
            {
                echo "Admin not verified. Please activate account";
            }
            else
            {
                //if($user_data['password'] == $password)
                if(password_verify($password, $admin_data["password"]))
                {
                    echo "Het werkt!";
                    $_SESSION['admin_id'] = $admin_data['admin_id'];
                    header("Location: admin-dash.php");
                    die;
                }
            }
        }
    }
}     //is er iets gepost

$con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Begin Links -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" type="image/png" href="img/mclogopng.png" />

    <!-- Einde Links -->
</head>

<body>
    <div id="menu-container">
        <div id="bg-nav">
            <a href="index.php">
                <img src="img/mclogosmall2.jpg" class="toplogo" href="index.php">
            </a>
        </div>
        <div id="menu">
            <nav id="login-nav">
                <ul>
                    <li><a class="activeKlein" href="admin-login.php"><i class="fa fa-user"></i> Log In</span></a></li>
                    <!--
                    -->
                    <li><a href="signup.php">Registreer</a></li>
                </ul>
            </nav>
            <nav id="boven-nav">
                <ul>
                    <li><a class="active" href="app.php">App</a></li>
                    <!--
                    -->
                    <li><a href="nieuwsbrief.php">Nieuwsbrief</a></li>
                </ul>
            </nav>
            <nav id="main-nav">
                <ul>
                    <li><a href="index.php"> Home <i class="fa fa-chevron-down"></i></span></a></li>
                    <!--
                -->
                    <li><a href="podcast.php">McDonald's Podcast</a></li>
                    <!--
                -->
                    <li><a href="mcradio.php">McRadio</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="witruimte"></div>

    <h1 class="header-title">Admin Login</h1>
    <div class="witruimte"></div>
    <div class="content-container">

        <div id="absoluteCenteredDivAdmin">
            <form method="post">
                <div class="box">
                    <div class="miniWitruimte"></div>
                    <p class="login-title" href="#">Gebruikersnaam</p>
                    <input class="username" name="username" type="text" placeholder="Gebruikersnaam" required>
                    <div class="miniWitruimte"></div>
                    <p class="login-title" href="#">Wachtwoord</p>
                    <input id="password3" name="password" type="password" placeholder="Wachtwoord" required>
                    <i class="fa fa-eye" id="togglePassword3"></i>
                </div>
                <div class="miniWitruimte2"></div>
                <p class="fpwd" href="#">Wachtwoord Vergeten?</p>
                <div class="miniWitruimte"></div>
                <div class="miniWitruimte"></div>
                <div class="miniWitruimte"></div>
                <input type="submit" value="Login" class="button">
                <!--<p href="#"><div class="button">Log In</div></p>-->
                <div class="miniWitruimte"></div>
                <div class="miniWitruimte"></div>
            </form>
        </div>

    </div>
    <div class="witruimte"></div>

    <div id="footer-container">
    <div id="footer-bg">
        <div class="footer-icon-div">
        <a class="footer-icon-yt" target="_blank" href="https://www.youtube.com/user/McDonaldsNederland"> 
        <i class="fa fa-youtube-play"></i>
        </a>
        <a class="footer-icon-insta" target="_blank" href="https://www.instagram.com/mcdonaldsnl/"> 
        <i class="fa fa-instagram"></i>
        </a>
        <a class="footer-icon-fb" target="_blank" href="https://www.facebook.com/mcdonaldsnederland/"> 
        <i class="fa fa-facebook-f"></i>
        </a>
        </div>
    </div>
    <div id="footer-bg-logo">
        <a href="loggedin.php">
            <img src="img/mclogosmall2.jpg" class="footerlogo" href="loggedin.php">
        </a>
    </div>
    </div>
</div>

    <script src="js/app2.js"></script>

</body>

</html>
