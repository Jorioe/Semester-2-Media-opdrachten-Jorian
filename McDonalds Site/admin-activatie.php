<?php
	include('connection.php');
    include("admin-login-functions.php");

   // $user_data = check_login($con);

	session_start();
	// if(isset($_GET['code'])){
	// $admin=$_GET['aid'];
	// $code=$_GET['code'];
 
	// $query=mysqli_query($con,"select * from admin where admin_id='$admin'");
	// $row=mysqli_fetch_array($query);
        
    
	// if($row['code']==$code){
	// 	//activate account
	// 	mysqli_query($con,"update admin set verify='1' where admin_id='$admin'");
        
        
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
        <a href="index.php">
            <img src="img/mclogosmall2.jpg" class="toplogo" href="index.php">
        </a>
        </div>
        <div id="menu">
            <nav id="login-nav">
                <ul>
                    <li><a class="activeKlein" href="admin-login.php"><i class="fa fa-user"></i> Log In</span></a></li><!--
                    --><li><a href="admin-signup.php">Registreer</a></li>
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

<h1 class="header-title">Admin Toegevoegd!</h1>
<div class="witruimte2"></div>
<div class="welkom-container">
<h1 id="loglink"> <a href="admin-account.php">Ga terug naar je account.</a></h1>
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
    
</body>
</html>





		<?php
	// }
	// else{
	// 	echo   "Something went wrong. Please sign up again.";
	// }
	// }
?>