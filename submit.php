<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/png" href="billeder/favicon_vbg.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <meta charset="UTF-8">
        <title>Submit to an ART TROLLEY - Visual By Groos</title>
        <meta name="description" content="Sign up for an Art Trolley and get it booked when the webshop opens. Right now you will get an Early Bird offer that give you a discount on your first purchase of an Art Trolley"/>
        <meta name="keywords" content="submit,early bird,discount,art trolley,webshop"/>
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
            <li><a class="active" href="submit.php">SIGN UP</a></li>
			<li><a href="about.html">ABOUT</a></li>
            <li><a href="trolley.html">ART TROLLEY</a></li>
            <li><a href="contact.php">CONTACT</a>
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

<!-- SUBMIT -->
     <!-- SUBMIT HEADER -->
    <div class="frontpage">
        <img class="about_header_img" alt="about image" src="billeder/submit_header_img.jpg">

    <div class="frontpage_content">
         <div class="breadcrumbs"> You Are Here:
            <a style="color:blue; text-decoration:none;" href="en.html"> Home</a> / Sign Up
        </div>
        <!-- section 1 -->
    <div class="colonne_3_center">
        <img alt="materials visual by groos" class="materials" src="billeder/early_bird_signup_en.png"><br><br>
    </div>
    
    <!-- section 2 -->
    <div class="colonne_3_center_about_team">
<!-- PHP START -->
<?php
        
$submit = filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_STRING);

	if(!empty($submit)){ // button was pressed
		
		$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) or die('missing/illegal param name');
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('missing/illegal param email');
		
		require_once('db_submit.php');
		
		$sql = 'INSERT INTO submit (name, email) VALUES (?, ?)';
		$stmt = $con->prepare($sql);
		$stmt->bind_param("ss", $name, $email);
		$stmt->execute();

		//echo 'inserted '.$stmt->affected_rows.' rækker'; 
		$stmt->close();

    }
?>
	<div class="submit">
		<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h1>SIGN UP HERE</h1>
			<p style="text-align:center;">Sign up for an ART TROLLEY and get it booked when the webshop opens.<br> You will recive an e-mail when our workshop are ready and when you can buy THE ART TROLLEY with discount.</p><br>
			<input type="text" placeholder="NAME" name="name" required style="width: 22em"><br><br>
			<input type="email" placeholder="E-MAIL" name="email" required style="width: 22em"><br><br>
			<input type="submit" name="submit" value="SUBMIT" id=button style="text-align: center; width: 22em">
		</form>
	</div><br>
 </div>
    
<!-- PHP SLUT -->
        
         <!-- section 2 -->
    <div class="colonne_3_center_about_team">
            <h2 style="text-align:center; padding-top:40px;">HOW IT WORKS</h2><br><br>
            <div class="icon_idea">
                <img alt="design icon" src="billeder/icon_signup.png" style="vertical-align: middle; height: 70px; width: 70px;"> 
                <h2 style="text-align: center;">1.<br>SIGN UP</h2>
                <p style="text-align: center;">Sign up above so you know where we launch and will get a mail.</p>
            </div>
            
            <div class="icon_idea">
                <img alt="design icon" src="billeder/icon_mail.png" style="vertical-align: middle; height: 70px; width: 70px;"> 
                <h2 style="text-align: center;">2.<br>GET A MAIL WHEN WE LAUNCH</h2>
                <p style="text-align: center;">When you have signed up you will get a mail when the shop is ongoing.</p>
            </div>
        
            <div class="icon_idea">
                <img alt="design icon" src="billeder/icon_buy.png" style="vertical-align: middle; height: 70px; width: 70px;"> 
                <h2 style="text-align: center;">3. <br>BUY THE TROLLEY IN THE SHOP</h2>
                <p style="text-align: center;">When you get the mail you can buy THE ART TROLLEY or WALL MOUNT on our shop!</p>
            </div>
        </div><br><br>
    
        
        
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
