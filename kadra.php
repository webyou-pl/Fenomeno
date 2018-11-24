<?php
require_once 'structure/template.php';
?>
<link rel="stylesheet" type="text/css" href="vendors/css/reveal.css">
<link rel="stylesheet" type="text/css" href="resources/css/scss/pages/_kadra.css">

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
            
        <a href="#" class="big-link" data-reveal-id="myModal1">    
            <img src="Material/kadra/bryan%20west.jpg"></a>
            <p>Imie Nazwisko</p>
        </div>
        <div id="myModal1" class="reveal-modal">
            <h6>Imie Nazwisko</h6>
            <img src="Material/kadra/trainer%20example.jpg" class="trainer-picture">
			<p class="trener">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. TEXT1</p>
			<a class="close-reveal-modal">&#215;</a> 
		      </div>   
            
            
        <div class="col span-1-of-3 box">
            <a href="#" class="big-link" data-reveal-id="myModal2">
            <img src="Material/kadra/donald%20evans.jpg"></a>
            <p>Imie Nazwisko</p>
            </div>
            <div id="myModal2" class="reveal-modal">
            <h6>Imie Nazwisko</h6>
            <img src="Material/kadra/treiner-exm2.jpg"class="trainer-picture">
			<p class="trener">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. TEXT2</p>
			<a class="close-reveal-modal">&#215;</a> 
		      </div>   
            
            
            <div class="col span-1-of-3 box">
            <a href="#" class="big-link" data-reveal-id="myModal3">
            <img src="Material/kadra/eva%20wade.jpg"></a>
                <p>Imie Nazwisko</p>
            </div>
            <div id="myModal3" class="reveal-modal">
            <h6>Imie Nazwisko</h6>
            <img src="Material/kadra/treiner-exm2.jpg"class="trainer-picture">
			<p class="trener">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. TEXT3</p>
			<a class="close-reveal-modal">&#215;</a> 
		      </div>   
        </div>
        
        
        <div class="trener2">
            <div class="col span-1-of-2 box">
            <a href="#" class="big-link" data-reveal-id="myModal4">
            <img src="Material/kadra/guy%20ferguson.jpg"></a>
                <p>Imie Nazwisko</p>
            </div>
            <div id="myModal4" class="reveal-modal">
            <h6>Imie Nazwisko</h6>
            <img src="Material/kadra/treiner-exm2.jpg"class="trainer-picture">
			<p class="trener">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. TEXT4</p>
			<a class="close-reveal-modal">&#215;</a> 
		      </div>
            
            <!-- Way to make pop up! start -->
            <div class="col span-1-of-2 box">
            <a href="#" class="big-link" data-reveal-id="myModal5">
            <img src="Material/kadra/sherry%20lee.jpg"></a>
            <p>Imie Nazwisko</p>
            </div>
        
            <div id="myModal5" class="reveal-modal">
            <h6>Imie Nazwisko</h6>
            <img src="Material/kadra/treiner-exm2.jpg"class="trainer-picture">
			<p class="trener">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. TEXT5</p>
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


