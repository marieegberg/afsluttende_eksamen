<!DOCTYPE html>
<html lang="da">
<head>
    <link rel="shortcut icon" type="image/png" href="billeder/favicon_vbg.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <meta charset="UTF-8">
        <title>Kontakt os nu - Visual By Groos</title>
        <meta name="description" content="Har du yderligere spørgsmål til Visual By Groos eller ART TROLLEYEN, så kontakt os idag og få nærmere information og svar på dine spørgsmål"/>
        <meta name="keywords" content="kontakt,spørgsmål,art trolleys,visual by groos"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mobil.css"> 
    <link rel="stylesheet" href="medium.css" media="screen and (min-width: 960px)">
    <link rel="stylesheet" href="large.css" media="screen and (min-width: 1500px)">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    
<!--NAV BAR-->
    <div class="navbar-left">
                <a href="en.html" style="background: none;">
                <img class="logo" src="billeder/visualbygroos_logo.png" alt="visual by groos logo">
            </a>
        </div>
    <div class="navbar">
        <div class="active">
        <ul class="navbar-right">
            <li><a href="index.html">HJEM</a></li>
            <li><a href="tilmeld.php">TILMELD</a></li>
			<li><a href="om.html">OM OS</a></li>
            <li><a href="trolleyen.html">ART TROLLEY</a></li>
            <li><a class="active" href="kontakt.php">KONTAKT</a>
            <li><a href="index.html" style="padding: 7px; background: none;"><img class="language" alt="danish_language" src="billeder/danish_language_icon.png" width="20" height="20">
            </a></li>
            <li><a href="en.html" style="padding: 7px; background: none;"><img class="language" alt="english_language" src="billeder/english_language_icon.png" width="20" height="20">
            </a></li>
        </ul>
    </div>
    </div>
    
<!-- NAV BAR MOBILE -->
    <div class="name">
        <a href="index.html">
        </a>
    </div>
    <nav class="mobile">
		<button></button>
		<div>
            <a href="index.html" style="padding: 7px; background: none; background: white"><img class="language" alt="dansk_language" src="billeder/danish_language_icon.png" width="20" height="20">
            </a>
            <a href="en.html" style="padding: 7px; background: white"><img class="language" alt="english_language" src="billeder/english_language_icon.png" width="20" height="20">
            </a>
			<a href="index.html">HJEM</a>
            <a href="tilmeld.php">TILMELD</a>
			<a href="om.html">OM OS</a>
			<a href="trolleyen.html">ART TROLLEY</a>
			<a href="kontakt.php">KONTAKT</a>
		</div>
	</nav>

<!-- CONTACT -->
     <!-- CONTACT HEADER -->
    <div class="frontpage">
        <img class="about_header_img" alt="about image" src="billeder/contact_header_img_dansk.jpg">

    <div class="frontpage_content">
        <div class="breadcrumbs"> Du Er Her:
            <a style="color:blue; text-decoration:none;" href="en.html">  Hjem</a> / Kontakt
        </div>
    
    <!-- section 1 -->
    <div class="colonne_3_center_about_team">
<!-- PHP START -->
<?php
		
$contact = filter_input(INPUT_POST, 'contact', FILTER_SANITIZE_STRING);

	if(!empty($contact)){ // button was pressed
		
		$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) or die('missing/illegal param name');
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('missing/illegal param email');
        $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING) or die('missing/illegal param subject');
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING) or die('missing/illegal param message');
        
        require_once('db_contact.php');
		
		$sql = 'INSERT INTO contact (name, email, subject, message) VALUES (?, ?, ?, ?)';
		$stmt = $con->prepare($sql);
		$stmt->bind_param("ssss", $name, $email, $subject, $message);
		$stmt->execute();

		//echo 'inserted '.$stmt->affected_rows.' rækker'; 
		$stmt->close();
        
		}
?>
	<div class="contact">
		<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h1>HAR DU SPØRGSMÅL?</h1>
			<p style="text-align:center;">Har du yderligere spørgsmål til Visual By Groos eller ART TROLLEYEN, så kontakt os idag og få nærmere information og svar på dine spørgsmål.<br> udfyld venligst formularen herunder.</p><br>
			<input type="text" placeholder="NAVN" name="name" required style="width: 22em;"><br><br>
			<input type="email" placeholder="E-MAIL" name="email" required style="width: 22em"><br><br>
            <input type="text" placeholder="OVERSKRIFT" name="subject" required style="width: 22em"><br><br>
            <textarea style="width: 22em" type="text" placeholder="BESKED" name="message" required></textarea><br><br>
			<input type="submit" name="contact" value="SEND" id=button style="text-align: center; width: 22em">
		</form>
	</div><br>
 </div>
    
<!-- PHP SLUT -->
    
        
    <!-- FOOTER -->
<footer>
  <div class="footer_col1">
    <a href="https://www.instagram.com/visualbygroos/">
      <img alt="instagram_icon" src="billeder/Instagram_icon.png" style="width: 40px; height: 40px; padding-right: 10px;"></a>
    <a href="https://www.facebook.com/visualbygroos/">
      <img alt="facebppl_icon" src="billeder/facebook_icon.png" style="width: 40px; height: 40px; padding-left: 10px;"></a>
    </div>
    <div class="footer_col2">VISUAL BY GROOS © 2018</div>
        <div class="footer_col3">+45 27 50 12 83<br>     info@visualbygroos.com</div>
</footer> 
        
</div>  
</div>
    
<script src="hamburger.js"></script>
<script src="slideshow"></script>
</body>
</html>
