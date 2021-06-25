<?php
session_start();

include("connection.php");
include("admin-login-functions.php");

if($_SESSION['admin_id']==null){

    if($_SESSION['user_id']==!null){
        header("Location: mijn-berichten.php");
    }else
    {

    header("Location: admin-login.php");
    }
}

$admin_data = check_login_admin($con);

// $sql = "SELECT b.subject, b.message, u.firstname, u.lastname FROM berichten b, users u WHERE b.user_id = u.user_id ORDER BY id DESC";
// $sql = "SELECT * FROM berichten ORDER BY id DESC";
$sql = "SELECT B.*, U.firstname, U.lastname, U.phone FROM berichten AS B RIGHT JOIN users AS U ON B.user_id = U.user_id ORDER BY id DESC";
$result = $con->query($sql);

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
                    --><li><a class="active" href="admin-account.php">Mijn Account</a></li>
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
                --><li><a class="active" href="berichten.php">Berichten</a></li>
            </ul>
        </nav>
    </div>
</div>


<div class="witruimte"></div>

<h1 class="header-title">Berichten</h1>
<div class="witruimte"></div>
<div class="witruimte"></div>
    
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      if($row["subject"] == !null){
        echo ' <div class="msg-box">
    <div class="msg-top"> ' . $row["subject"]. ' </div> 
    <div class="msg-bericht"> ' . $row["message"]. '</div> 
    <div class="msg-info"> Naam: ' . $row["firstname"]. ' ' . $row["lastname"]. '</div> 
    <div class="msg-info"> Telefoonnummer: ' . $row["phone"]. '</div> 
    <div class="msg-footer"> ' . $row["date"]. ' <a class="msg-delete" href="deleteItem.php?id='.$row["id"] .'">Delete</a>  </div>
    </div>';
      }
    
  }
} else {
  echo "<p>Je hebt nog geen berichten, klik <a href='forum.php'>hier</a> om een bericht achter te laten";
 
}
$con->close();
?>

<div class="witruimte"></div>
<div class="witruimte"></div>
<div class="witruimte"></div>
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
        <a href="loggedin.php">
            <img src="img/mclogosmall2.jpg" class="footerlogo" href="loggedin.php">
        </a>
    </div>
    </div>
</div>

    
</body>
</html>