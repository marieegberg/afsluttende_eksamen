<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/png" href="billeder/favicon_vbg.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <meta charset="UTF-8">
        <title>Contact us now - Visual By Groos</title>
        <meta name="description" content="Do you have further questions for Visual By Groos or the ART TROLLEY contact us now and get further information to your question"/>
        <meta name="keywords" content="contact,question,art trolley,visual by groos"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mobil.css"> 
    <link rel="stylesheet" href="medium.css" media="screen and (min-width: 960px)">
    <link rel="stylesheet" href="large.css" media="screen and (min-width: 1500px)">
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
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
            <li><a href="en.html">HOME</a></li>
            <li><a href="submit.php">SIGN UP</a></li>
			<li><a href="about.html">ABOUT</a></li>
            <li><a href="trolley.html">ART TROLLEY</a></li>
            <li><a class="active" href="contact.php">CONTACT</a>
            <li><a href="index.html" style="padding: 7px; background: none;"><img class="language" alt="danish_language" src="billeder/danish_language_icon.png" width="20" height="20">
            </a></li>
            <li><a href="en.html" style="padding: 7px; background: none;"><img class="language" alt="english_language" src="billeder/english_language_icon.png" width="20" height="20">
            </a></li>
        </ul>
    </div>
    </div>
    
<!-- NAV BAR MOBILE -->
    <div class="name">
        <a href="en.html">
        </a>
    </div>
    <nav class="mobile">
		<button></button>
		<div>
            <a href="index.html" style="padding: 7px; background: none; background: white"><img class="language" alt="dansk_language" src="billeder/danish_language_icon.png" width="20" height="20">
            </a>
            <a href="en.html" style="padding: 7px; background: white"><img class="language" alt="english_language" src="billeder/english_language_icon.png" width="20" height="20">
            </a>
			<a href="en.html">HOME</a>
            <a href="submit.php">SIGN UP</a>
			<a href="about.html">ABOUT</a>
			<a href="trolley.html">ART TROLLEY</a>
			<a href="contact.php">CONTACT</a>
		</div>
	</nav>

<!-- CONTACT -->
     <!-- CONTACT HEADER -->
    <div class="frontpage">
        <img class="about_header_img" alt="about image" src="billeder/contact_header_img.jpg">

    <div class="frontpage_content">
        <div class="breadcrumbs"> You Are Here:
            <a style="color:blue; text-decoration:none;" href="en.html">  Home</a> / Contact
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
            <h1>DO YOU HAVE ANY QUESTIONS?</h1>
			<p style="text-align:center;">Do you have further questions for Visual By Groos or the ART TROLLEY contact us now and get further information to your question.<br>
            Please fill out the form below.</p><br>
			<input type="text" placeholder="NAME" name="name" required style="width: 22em;"><br><br>
			<input type="email" placeholder="EMAIL" name="email" required style="width: 22em"><br><br>
            <input type="text" placeholder="SUBJECT" name="subject" required style="width: 22em"><br><br>
            <textarea style="width: 22em" type="text" placeholder="MESSAGE" name="message" required></textarea><br><br>
			<input type="submit" name="contact" value="SUBMIT" id=button style="text-align: center; width: 22em">
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
