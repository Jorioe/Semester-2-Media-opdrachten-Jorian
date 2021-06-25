<?php
session_start();

$_SESSION;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDonalds</title>

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
        <a href="loggedin.php">
            <img src="img/mclogosmall2.jpg" class="toplogo" href="home.html">
        </a>
        </div>
        <div id="menu">
            <nav id="login-nav">
                <ul>
                    <li><a href="login.php"><i class="fa fa-user"></i> Log In</span></a></li><!--
                    --><li><a href="signup.php">Registreer</a></li>
                </ul>
            </nav>
            <nav id="boven-nav">
                <ul>
                    <li><a class="active" href="app.php">App</a></li><!--
                    --><li><a href="nieuwsbrief.php">Nieuwsbrief</a></li>
                </ul>
            </nav>
        <nav id="main-nav">
            <ul>
                <li><a class="active" href="index.php"> Home <i class="fa fa-chevron-down"></i></span></a></li><!--
                --><li><a href="podcast.php">McDonald's Podcast</a></li><!--
                --><li><a href="mcradio.php">McRadio</a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="witruimte"></div>

    <div class="text">McDonalds</div>
    <div class="container">
        <div class="imagecontainer" style="background-image: url('pictures/Artboard\ 4.png');">
            <div class="cards">
                <div class="artboardkaart">
                    <a href="loggedin.php">
                        <img class="mcmenu" src="/pictures/Artboard 1.png" alt="">
                    </a>
                    <div class="info" id="open"> 
                        <i class="fa fa-info-circle"></i>
                    </div>
                </div>
                <div class="artboardkaart">
                    <a href="podcast.php">
                        <img class="mcpodcast" src="/pictures/Artboard 2.png" alt="">
                    </a>
                    <div class="info" id="open2">
                        <i class="fa fa-info-circle"></i>
                    </div>
                </div>
                <div class="artboardkaart">
                    <a href="mijn-berichten.php">
                        <img class="berichten" src="/pictures/Artboard 3.png" alt="">
                    </a>
                    <div class="info" id="open3">
                        <i class="fa fa-info-circle"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal_container" id="modalcontainer1">
        <div class="modal">
            <h1>Home</h1>
            <div class="witruimte"></div>
            <p>Hier kan je naar de hoofdpagina gaan.</p>
            <div class="witruimte"></div>
            <button id="close1" class="close4">
                Sluiten
            </button>
        </div>
    </div>

    <div class="modal_container" id="modalcontainer2">
        <div class="modal">
            <h1>McPodcast</h1>
            <div class="witruimte"></div>
            <p>Luister hier fragmenten van de McPodcast!</p>
            <div class="witruimte"></div>
            <button id="close2" class="close4">
                Sluiten
            </button>
        </div>
    </div>

    <div class="modal_container" id="modalcontainer3">
        <div class="modal">
            <h1>Berichten</h1>
            <div class="witruimte"></div>
            <p>Stuur hier je vragen in die worden beantwoord in de McPodcast!</p>
            <div class="witruimte"></div>
            <button id="close3" class="close4">
                Sluiten
            </button>
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

    <div id="footer-login">
                <ul>
                    <li><a class="active" href="admin-login.php"><i class="fa fa-user"></i> Admin</span></a></li>
                </ul>
    </div>

    <div id="footer-bg-logo">
        <a href="loggedin.php">
            <img src="img/mclogosmall2.jpg" class="footerlogo" href="loggedin.php">
        </a>
    </div>
    </div>
</div>

    <script src="js/main.js"></script>
</body>
</html>