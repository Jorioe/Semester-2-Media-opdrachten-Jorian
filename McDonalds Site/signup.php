<?php
session_start();

include("connection.php");
include("functions.php");

//$user_data = check_login($con);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //iets is gepost
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //hash wachtwoord

    if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($phone) && !empty($username) && !empty($password) && !is_numeric($username))
    {
        
        //email checken
        $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        //username checken
        $sql_u = "SELECT * FROM users WHERE username='$username' LIMIT 1";
        $result = mysqli_query  ($con, $sql);
        $res_u = mysqli_query  ($con, $sql_u);
        
        if (mysqli_num_rows($result) > 0) {
            $errmessage = "Email already exists";
            echo "<script type='text/javascript'>alert('$errmessage');</script>";
        }else if (mysqli_num_rows($res_u) > 0) {
            $errmessage2 = "Username already exists";
            echo "<script type='text/javascript'>alert('$errmessage2');</script>";
        }else
        { 
            $query=mysqli_query($con,"select * from user where email='$email'");
            $set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $code=substr(str_shuffle($set), 0, 12);
            
        //opslaan naar database
        $user_id = random_num(20);
        $query = "insert into users (user_id,firstname,lastname,email,phone,username,password, code) values ('$user_id','$firstname','$lastname','$email','$phone','$username','$password', '$code')";
        /*$uid=mysqli_insert_id($con);*/

        mysqli_query($con, $query);
            
            
            $to = $email;
			$subject = "McDonalds Verificatie Code";
			$message = "
				<html>
				<head>
				<title>Verificatie Code</title>
				</head>
				<body>
				<h2>Bedankt voor het registreren.</h2>
				<p>Je Account:</p>
                <p>Gebruikersnaam: ".$username."</p>
				<p>Email: ".$email."</p>
                <p>Telefoonnummer: ".$phone."</p>
				<p>Persoonlijke ID: ".$user_id."</p>
				<p>Klik op de onderstaande link om uw account te activeren.</p>
				<h4><a href='http://mcdonalds.com/activatie.php?uid=$user_id&code=$code'>Activeer Mijn Account</h4>
				</body>
				</html>
				";
			//dont forget to include content-type on header if your sending html
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: proftaakmcdonalds@gmail.com". "\r\n";
            $headers .= "Reply-To: proftaakmcdonalds@gmail.com". "\r\n"; 
 
		mail($to,$subject,$message,$headers);
 
  		header('location:verzonden.php');

        }
    }else
    {
        echo "Voer geldige informatie in.";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreer</title>

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
                    <li><a href="login.php"><i class="fa fa-user"></i> Log In</span></a></li><!--
                    --><li><a class="activeKlein" href="signup.php">Registreer</a></li>
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
                <li><a href="index.php"> Home <i class="fa fa-chevron-down"></i></span></a></li><!--
                --><li><a href="podcast.php">McDonald's Podcast</a></li><!--
                --><li><a href="mcradio">McRadio</a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="witruimte"></div>

<h1 class="header-title">Registreer</h1>
<div class="witruimte"></div>
<div class="content-container">

    <div id="absoluteCenteredDiv2">
        <form method="post">
            <div class="box2">
                <div class="miniWitruimte"></div>
                <p class="login-title" href="#">Voornaam <p class="reqtxt">*</p></p>
                <input class="username" name="firstname" type="text" placeholder="Voornaam" pattern="[A-Za-z]{2,}" title="Ongeldige invoer" required>
                <div class="miniWitruimte"></div>
                <p class="login-title" href="#">Achternaam <p class="reqtxt">*</p></p>
                <input class="username" name="lastname" type="text" placeholder="Achternaam" pattern="[A-Za-z]{2,}" title="Ongeldige invoer" required>
                <div class="miniWitruimte"></div>
                <p class="login-title" href="#">Email <p class="reqtxt">*</p></p>
                <input class="username" name="email" type="text" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>  
                <div class="miniWitruimte"></div>
                <p class="login-title" href="#">Telefoonnummer <p class="reqtxt">*</p></p>
                <input class="username" name="phone" type="tel" placeholder="0612345678" pattern="[0-9]{2}[0-9]{8}" title="Ongeldig telefoonnummer." required>  
                <div class="miniWitruimte"></div>
                <p class="login-title" href="#">Gebruikersnaam <p class="reqtxt">*</p></p>
                <input class="username" name="username" type="text" placeholder="Gebruikersnaam" pattern="^(?=.*[a-z])[a-zA-Z\d_.-]{2,}$" title="Moet ten minste één kleine letter en minimaal 2 of meer tekens bevatten." required>
                <div class="miniWitruimte"></div>
                <p class="login-title" href="#">Wachtwoord <p class="reqtxt">*</p></p>
                <input id="password" name="password" type="password" placeholder="Wachtwoord" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Moet ten minste één cijfer en één hoofdletter en een kleine letter bevatten, en moet minimaal 8 of meer tekens bevatten." required> 
                <i class="fa fa-eye" id="togglePassword"></i> 
                <div class="miniWitruimte"></div>
                <p class="login-title" href="#">Bevestig Wachtwoord <p class="reqtxt">*</p></p>
                <input id="password2" name="password" type="password" placeholder="Bevestig Wachtwoord" required>
                <i class="fa fa-eye" id="togglePassword2"></i>                 
            </div>
            <div class="miniWitruimte"></div>
            <button type="submit" id="submit" class="button">Registreer</button>
            <div class="miniWitruimte"></div>
            <p class="extLoginTxt" href="#">Al een account?</p>
            <div class="miniWitruimte"></div>
            <p class="regTxt" href="login.php">Login</p>
            <div class="miniWitruimte"></div>
        </form>
    </div>  

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
    
<script src="js/app.js"></script>
<script src="js/pass.js"></script>

</body>
</html>