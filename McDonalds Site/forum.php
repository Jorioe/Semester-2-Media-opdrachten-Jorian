<?php
session_start();

include("connection.php");
include("functions.php");

if (isset( $_GET["message"]))

      {

        $message = $_GET["message"];


        if($message == "success"){

         ?>
         <div id="sendpopup" class="popup">

          <!-- popup content -->
          <div class="popup-content">
            <span class="close" onClick="document.getElementById('sendpopup').style.display = 'none';">&times;</span>
            <p>Bericht is verzonden.</p>
          </div>
        
        </div>
        <?php

        } 
      }

if($_SESSION['user_id']==null){
    header("Location: maakaccount.php");
}

$user_data = check_login($con);

extract($_POST);

if($_SERVER['REQUEST_METHOD'] == "POST"){
$today = date("Y-m-d H:i:s");
$user_id = $user_data['user_id'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = "insert into berichten(user_id, subject, message, date) values ('$user_id','$subject','$message','$today')";

mysqli_query($con, $query);


$con->close();
header("Location: forum.php?message=success");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berichten</title>

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
                    --><li><a class="active" href="account.php">Mijn Account</a></li>
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
                --><li><a class="active" href="forum.php">Stel je vraag</a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="witruimte"></div>

<h1 class="header-title">Stel je vraag!</h1>
<div class="witruimte"></div>
<div class="content-container-forum">

    <div id="forumDiv">
        <form method="post">
                <div class="miniWitruimte"></div>
                <div class="forum-field-div">
                <p class="login-title" href="#">Titel <p class="reqtxt">*</p></p>
                <input class="forum-msg" name="subject" type="text" placeholder="Titel" minlength="5" title="Moet tenminste 5 of meer tekens bevatten." required>
                </div>
                <div class="miniWitruimte"></div>
                <p class="login-title" href="#">Bericht <p class="reqtxt">*</p></p>
                <textarea class="forum-msg" rows="4" cols="50" name="message" placeholder="Typ uw vraag hier" required></textarea> 
                <button type="submit" value="Verstuur" class="button"><p class="buttontxt">verstuur</p></button>         
        </form>
    </div>  
</div>

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
        <a href="loggedin.php">
            <img src="img/mclogosmall2.jpg" class="footerlogo" href="loggedin.php">
        </a>
    </div>
    </div>
</div>



<script src="js/popup.js"></script>

</body>
</html>