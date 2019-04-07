<?php
$template_start = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta name="description" content="">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animations.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    <title>Fenomeno</title>
</head>
<body>
    <script src="vendors/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="vendors/js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script src="vendors/js/min_slider_partners.js" type="text/javascript"></script>
    <script src="vendors/js/wy-validate.js" type="text/javascript"></script>
<!-- Start top heder -->
<header>
    <section>
        <div class="top_header">
            <div class="lan_con">
                <div class="contact">
                    <div class="tel"><a href="#!"> Tel: 123 156 753</a></div>
                    <div class="email"><a href="#!">Email: adres@domena.pl</a></div>
                </div>
            </div>
            <!-- start main navigation -->
            <nav>
                
                <div class="row">
                    <ul class="main-nav">
                        <a href="index.php"><img src="resources/img/logo_fenomeno_wroclaw.png" alt="logo"/></a> 
                        <li><a href="o_szkole.php">O szkole</a></li>
                        <li><a href="oferta.php">Oferta</a></li>
                        <li><a href="kadra.php">Kadra</a></li>
                        <li><a href="galeria.php">Galeria</a></li>
                        <li><a href="kontakt.php">Kontakt</a></li> 
                        <div class="footer-mobile">©2018 <a href="http://www.webyou.pl" target="_blank" >www.webyou.pl</a> - wszelkie prawa zastrzeżone. Projekt zrealizowany przez zespół webyou.</div>
                    </ul>
                    <div class="main-nav__overlay"></div>
                </div> 
            </nav>
            <!-- End main navigation -->
            <div class="logo_socjal">
                <div class="logo">
                    <a href="index.php"><img class="logo_img" src="resources/img/logo_fenomeno_wroclaw.png" alt="logo"/></a> 
                    <h1 class="logo_text"><a href="index.php">fenomeno <span class="color_awarded_one">wro</span>cław</a></h1>
                </div>
            </div>
        </div>
    </section>
</header>
<!-- END top heder -->';
		
$template_end = '	  ';	

$template_footer = '<div class="footer">
©2018 <a href="http://www.webyou.pl" target="_blank" >www.webyou.pl</a> - wszelkie prawa zastrzeżone. Projekt zrealizowany przez zespół webyou.
</div>
<div class="yellow-card" id="news-card" onclick="addShow(this)">
    <div class="yellow-card__body">
        <h2>News</h2>
        <p class="data">05-04-2019</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>

';	
?>


