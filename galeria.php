<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>

<link rel="stylesheet" type="text/css" href="vendors/css/lightbox.min.css">

<body>
<section class="gallery-background">
            <div class="row">
                <!-- klasa powina byc ogolna -->
                <h4 class="text">Galeria</h4>
                <hr/>
            </div>
        <!-- Big Image -->
    
        <div class="gallery">
            <a href="galeria2018.php"><p class="galleryp">2018</p><img src="resources/img/Galeria/1-small.jpg"></a>
            <a href="galeria2019.php"><p class="galleryp">2019</p><img src="resources/img/Galeria/2-small.jpg"></a>
            <a href="galeria2020.php"><p class="galleryp">2020</p><img src="resources/img/Galeria/3-small.jpg"></a>
            
        </div>


</section>
    <script type="text/javascript" src="vendors/js/lightbox-plus-jquery.min.js"></script>
    </body>
  <?php echo $template_footer; ?>  