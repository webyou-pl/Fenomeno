<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
<!-- Slideshow container -->
<section class="main">
    <div class="show">
        <video autoplay muted loop class="show__video">
            <source src="resources/video1.mp4" type="video/mp4">
        </video>
        <div class="show__tekst">
            <span class="show__tekst--first-line">Z nami osiągniesz sukces</span>
            <span class="show__tekst--second-line">Dołącz już dziś</span>
        </div>
    </div>

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

<script type="text/jscript" src="resources/js/index_cookies_js.js"></script>
</body>
</html>