<?php
session_start();

include("connection.php");
include("functions.php");

// $user_data = check_login($con);

if(($_SESSION['user_id']==null) && ($_SESSION['admin_id']==null)){
    echo 'null';
    ("Location: app.php");
}

/*if($_SESSION['admin_id']==null){
    echo 'admin null';
    // header("Location: nieuwsbrief.php");
}*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDonald's App</title>

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
            <img src="img/mclogosmall2.jpg" class="toplogo" href="loggedin.php">
        </a>
        </div>
        <div id="menu">
            <nav id="login-nav">
                <ul>
                <li><a href="loggedout.php"><i class="fa fa-sign-out"></i> Log uit</span></a></li><!--
                    --><li><a href="account.php">Mijn Account</a></li>
                </ul>
            </nav>
            <nav id="boven-nav">
                <ul>
                    <li><a class="activeKlein" href="app2.php">App</a></li><!--
                    --><li><a href="nieuwsbrief2.php">Nieuwsbrief</a></li>
                </ul>
            </nav>
        <nav id="main-nav">
            <ul>
                <li><a href="loggedin.php"> Home <i class="fa fa-chevron-down"></i></span></a></li><!--
                --><li><a href="podcast2.php">McDonald's Podcast</a></li><!--
                --><li><a href="mcradio2.php">McRadio</a></li><!--
                --><li><a href="forum.php">Stel je vraag</a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="witruimte"></div>
<h1 class="header-title">De McDonald’s App</h1>
<div class="witruimte"></div>
<div id="app-box3">
    <h1 class="header-title2">Eindeloos veel fun met Coupons, winacties, de Wishlist en meer!</h1>
    <h2 class="header-txt">Waar je ook bent, met onze App weet je precies waar de dichtstbijzijnde McDonald’s te vinden is. Check meteen even het menu en stel je bestelling samen in de Wishlist. Ook laat je na je maaltijd gemakkelijk een review achter voor een van onze restaurants. 

        Maar er is meer! Met de McDonald's App blijf je op de hoogte van de nieuwste producten, leuke winacties en spannende games. Ook hebben we speciaal voor onze App gebruikers wekelijks nieuwe Coupons, waarmee je met korting geniet van jouw favoriete producten.</h2>
    </div>
    <div class="witruimte"></div>
    <div class="witruimte"></div>
    <div id="app-container-flex">
    <div id="header-box">
    <p class="header-title3">Download in de App Store</p>
    <p class="header-title4">Om de McDonald's App op een Apple telefoon te downloaden.</p>
    <a href="https://apps.apple.com/nl/app/mcdonalds/id1217507712" target="_blank">
    <img src="img/App-Store-Black-fill.png" class="appbtn">
</a>
    </div>
    <div class="witruimte"></div>
    <div id="header-box2">
        <p class="header-title3">Download in de Play Store</p>
        <p class="header-title4">Om de McDonald's App op een Android telefoon te downloaden.</p>
        <a href="https://play.google.com/store/apps/details?id=com.mcdonalds.mobileapp&hl=nl2" target="_blank">
        <img src="img/Play-Store-Black-fill.png" class="appbtn" href="index.html">
    </a>
    </div>
    </div>
    <div class="witruimte"></div>
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

    
</body>
</html>