<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
<style>
body{
    background: #000;
}
#myVideo {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    /* height: 100%; */
}
.fullscreen-bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
    z-index: -100;
}
</style>
<!-- Slideshow container -->
<section class="main">

<div class="fullscreen-bg">
    <video autoplay muted loop id="myVideo">
        <source src="resources/Football_Academy.mp4" type="video/mp4">
    </video>
</div>
</section>
<!-- start footer -->
<footer class="down_footer">
    <div class="partners">
        <div id="jssor_1" class="footer_slides">
            <h4 class="text_sliders">Partnerzy:</h4>
            <!-- Loading Screen -->
            <div data-u="loading" class="loading">
                <img  src="resources/img/partners/spin.svg" />
            </div>
            <div data-u="slides" class="slider">
                <div>
                    <img id="img_slider" data-u="image" src="resources/img/partners/adidas.png" />
                </div>
                <div>
                    <img id="img_slider" data-u="image" src="resources/img/partners/CarolinaPanthers.png" />
                </div>
                <div>
                    <img id="img_slider" data-u="image" src="resources/img/partners/Denver-Broncos-Logo.png" />
                </div>
                <div>
                    <img id="img_slider" data-u="image" src="resources/img/partners/new-balance-logo.png" />
                </div>
                <div>
                    <img id="img_slider" data-u="image" src="resources/img/partners/nike.png" />
                </div>
                <div>
                    <img id="img_slider" data-u="image" src="resources/img/partners/Puma.png" />
                </div>
                <div>
                    <img id="img_slider" data-u="image" src="resources/img/partners/adidas.png" />
                </div>
                <div>
                    <img id="img_slider" data-u="image" src="resources/img/partners/CarolinaPanthers.png" />
                </div>
                <div>
                    <img id="img_slider" data-u="image" src="resources/img/partners/Denver-Broncos-Logo.png" />
                </div>
                <div>
                    <img id="img_slider" data-u="image" src="resources/img/partners/nike.png" />
                </div>
            </div>
        </div>
    </div>
    <?php echo $template_footer; ?>
</footer>
<!-- end footer -->
</body>
    <script src="resources/css/script.js"></script>
</html>