<?php
session_start();

include("connection.php");
include("functions.php");
/*include("functions.php");*/

$user_data = check_user($con);

if($_SESSION['user_id']==null){

    if($_SESSION['admin_id']==!null){
        header("Location: admin-account.php");
    }else
    {

    header("Location: maakaccount.php");
    }
}


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
            <img src="img/mclogosmall2.jpg" class="toplogo" href="loggedin.php">
        </a>
        </div>
        <div id="menu">
            <nav id="login-nav">
                <ul>
                    <li><a class="active" href="loggedout.php"><i class="fa fa-sign-out"></i> Log uit</span></a></li><!--
                    --><li><a class="activeKlein" href="account.php">Mijn Account</a></li>
                </ul>
            </nav>
            <nav id="boven-nav">
                <ul>
                    <li><a class="active" href="app2.php">App</a></li><!--
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

<div class="side-nav">
  <header class="side-header">Menu</header>
  <a class="side-active" href="#about">Informatie</a>
  <a href="mijn-berichten.php">Mijn Berichten</a>
  <a href="loggedout.php">Log uit</a>
</div>



<h1 class="header-title">Mijn account</h1>
<div class="witruimte2"></div>
<div class="account-info-container">
<div class="account-info-titel">Account Details</div>
<div class="account-info-div">
<h1 class="account-info-txt">Naam: <?php echo $user_data['firstname']; ?> <?php echo $user_data['lastname']; ?></h1>
</div>
<div class="account-info-div">
<h1 class="account-info-txt">Email: <?php echo $user_data['email']; ?></h1>
</div>
<div class="account-info-div">
<h1 class="account-info-txt">Telefoonnummer: <?php echo $user_data['phone']; ?></h1>
</div>
<div class="account-info-div">
<h1 class="account-info-txt">Gebruikersnaam: <?php echo $user_data['username']; ?></h1>
</div>
<div class="account-info-div-onder">
<h1 class="account-info-txt">Persoonlijke id: <?php echo $user_data['user_id']; ?></h1>
</div>
</div>
<div class="witruimte"></div>
<div class="witruimte"></div>
<div class="witruimte"></div>
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
        <a href="index.php">
            <img src="img/mclogosmall2.jpg" class="footerlogo" href="index.php">
        </a>
    </div>
    </div>
</div>
    
</body>
</html>