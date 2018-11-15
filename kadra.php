<?php
require_once 'structure/template.php';
?>
<link rel="stylesheet" type="text/css" href="vendors/css/reveal.css">

<?php echo $template_start; ?>
<body>
<section class="kadra">
            <div class="row">
                <!-- klasa powina byc ogolna -->
                <h4 class="text">Kontakt</h4>
                <hr/>
            </div>
    <div class="row">
        <div class="trener1">
        <div class="col span-1-of-3 box">
        <a href="#" class="big-link" data-reveal-id="myModal">    
            <img src="Material/kadra/bryan%20west.jpg"></a>
            <p>Imie Nazwisko</p>
        </div>
        <div id="myModal" class="reveal-modal">
            <h1>Reveal Modal Goodness</h1>
			<p>This is a default modal in all its glory, but any of the styles here can easily be changed in the CSS.</p>
			<a class="close-reveal-modal">&#215;</a> 
		      </div>   
            
            
        <div class="col span-1-of-3 box">
            <a href="#" class="big-link" data-reveal-id="myModal">
            <img src="Material/kadra/donald%20evans.jpg"></a>
            <p>Imie Nazwisko</p>
            </div>
                    <div id="myModal" class="reveal-modal">
            <h1>Reveal Modal Goodness</h1>
			<p>This is a default modal in all its glory, but any of the styles here can easily be changed in the CSS.</p>
			<a class="close-reveal-modal">&#215;</a> 
		      </div>  
            
            
            <div class="col span-1-of-3 box">
            <a href="#" class="big-link" data-reveal-id="myModal">
            <img src="Material/kadra/eva%20wade.jpg"></a>
                <p>Imie Nazwisko</p>
            </div>
                                <div id="myModal" class="reveal-modal">
            <h1>Reveal Modal Goodness</h1>
			<p>This is a default modal in all its glory, but any of the styles here can easily be changed in the CSS.</p>
			<a class="close-reveal-modal">&#215;</a> 
		      </div>  
        </div>
        
        
        <div class="trener2">
            <div class="col span-1-of-2 box">
            <a href="#" class="big-link" data-reveal-id="myModal">
            <img src="Material/kadra/guy%20ferguson.jpg"></a>
                <p>Imie Nazwisko</p>
            </div>
            <div id="myModal" class="reveal-modal">
			<h1>Reveal Modal Goodness</h1>
			<p>This is a default modal in all its glory, but any of the styles here can easily be changed in the CSS.</p>
			<a class="close-reveal-modal">&#215;</a> 
		      </div>
            
            <!-- Way to make pop up! start -->
            <div class="col span-1-of-2 box">
            <a href="#" class="big-link" data-reveal-id="myModal">
            <img src="Material/kadra/sherry%20lee.jpg"></a>
            <p>Imie Nazwisko</p>
            </div>
        
            <div id="myModal" class="reveal-modal">
			<h1>Reveal Modal Goodness</h1>
			<p>This is a default modal in all its glory, but any of the styles here can easily be changed in the CSS.</p>
			<a class="close-reveal-modal">&#215;</a> 
		      </div>
            <!-- Way to make pop up! END -->
        </div>
    </div>
    
    
    
    


    
    
</section>
<scrip src="vendors/js/jquery.reveal.js"></scrip>
</body>
<script type="text/javascript" src="vendors/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="vendors/js/jquery.reveal.js"></script>
<?php echo $template_footer; ?>


