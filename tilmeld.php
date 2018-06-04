<!DOCTYPE html>
<html lang="da">
<head>
    <link rel="shortcut icon" type="image/png" href="billeder/favicon_vbg.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <meta charset="UTF-8">
       <title>Tilmeld dig en ART TROLLEY - Visual By Groos</title>
        <meta name="description" content="Tilmeld dig og få reserveret en ART TROLLEY til webshoppen åbner. Lige nu får du Early Bird tilbud som giver dig rabat på dit første køb af den første"/>
        <meta name="keywords" content="art trolley,early bird tilbud,tilmeld,webshop" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mobil.css"> 
    <link rel="stylesheet" href="medium.css" media="screen and (min-width: 960px)">
    <link rel="stylesheet" href="large.css" media="screen and (min-width: 1500px)">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    
<!--NAV BAR-->
    <div class="navbar-left">
                <a href="index.html" style="background: none;">
                <img class="logo" src="billeder/visualbygroos_logo.png" alt="visual by groos logo">
            </a>
        </div>
    <div class="navbar">
        <div class="active">
        <ul class="navbar-right">
            <li><a href="index.html">HJEM</a></li>
            <li><a class="active" href="tilmeld.php">TILMELD</a></li>
			<li><a href="om.html">OM OS</a></li>
            <li><a href="trolleyen.html">ART TROLLEY</a></li>
            <li><a href="kontakt.php">KONTAKT</a>
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

<!-- SUBMIT -->
     <!-- SUBMIT HEADER -->
    <div class="frontpage">
        <img class="about_header_img" alt="about image" src="billeder/submit_header_img_dansk.jpg">

    <div class="frontpage_content">
         <div class="breadcrumbs"> Du Er Her:
            <a style="color:blue; text-decoration:none;" href="index.html"> Hjem</a> / Tilmeld
        </div>
        <!-- section 1 -->
    <div class="colonne_3_center">
        <img alt="materialer visual by groos" class="materials" src="billeder/early_bird_signup.png"><br><br>
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
            <h1>TILMELD DIG HER</h1>
			<p style="text-align:center;">Tilmeld dig og modtag en e-mail når vores webshop er færdig, og du kan købe din ART TROLLEY med rabat.
            </p><br>
			<input type="text" placeholder="NAVN" name="name" required style="width: 22em"><br><br>
			<input type="email" placeholder="E-MAIL" name="email" required style="width: 22em"><br><br>
			<input type="submit" name="submit" value="TILMELD" id=button style="text-align: center; width: 22em">
		</form>
	</div><br>
 </div>
    
<!-- PHP SLUT -->
        
         <!-- section 2 -->
    <div class="colonne_3_center_about_team">
            <h2 class="h1_h2" style="padding-top: 40px; text-align:center;">SÅDAN VIRKER DET</h2><br><br>
            <div class="icon_idea">
                <img alt="design icon" src="billeder/icon_signup.png" style="vertical-align: middle; height: 70px; width: 70px;"> 
                <h2 style="text-align: center;">1.<br>TILMELD DIG EARLY BIRD TILBUDDET</h2>
                <p style="text-align: center;">Tilmeld dig ovenover, så du ved hvornår webshoppen<br> åbner.</p>
            </div>
            
            <div class="icon_idea">
                <img alt="design icon" src="billeder/icon_mail.png" style="vertical-align: middle; height: 70px; width: 70px;"> 
                <h2 style="text-align: center;">2.<br>FÅ EN E-EMAIL NÅR VI ER KLAR</h2>
                <p style="text-align: center;">Hvis du har tilmeldt dig, vil du få en E-mail<br> når vores shop åbner.</p>
            </div>
        
            <div class="icon_idea">
                <img alt="design icon" src="billeder/icon_buy.png" style="vertical-align: middle; height: 70px; width: 70px;"> 
                <h2 style="text-align: center;">3. <br>KØB ART TROLLEYEN MED RABAT</h2>
                <p style="text-align: center;">Når du har modtaget mailen kan du gå ind på vores webshop og købe ART TROLLEYEN med din rabat.</p>
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
