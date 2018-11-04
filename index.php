<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
<!-- Slideshow container -->
<section class="main">
    <div class="slideshow-container">
    <!-- Full-width images with number and caption text -->
        <div class="mySlides first photo-background fade">
            <div class="row">
                <h1>Lorem ipsum dolor sit text1</h1>
            </div>
            <div class="row  opening-mid">
                <div>
                    <h2>Li Europan lingues es membres del sam familie. Lor separat</h2>
                </div>
                <div>
                    <h3>Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi </h3>
                </div>
            </div>
        </div>

        <div class="mySlides second photo-background fade">
            <div class="row">
                <h1>Lorem ipsum dolor sit text2</h1>
            </div>
            <div class="row  opening-mid">
                <div>
                    <h2>Li Europan lingues es membres del sam familie. Lor separat</h2>
                </div>
                <div>
                    <h3>Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi </h3>
                </div>
            </div>
        </div>

        <div class="mySlides third photo-background fade">
            <div class="row">
                <h1>Lorem ipsum dolor sit text3</h1>
            </div>
            <div class="row  opening-mid">
                <div>
                    <h2>Li Europan lingues es membres del sam familie. Lor separat</h2>
                </div>
                <div>
                    <h3>Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi </h3>
                </div>
            </div>
        </div>       
<!-- Next and previous buttons -->
        <div class="row">
            <div class="column">
                <a class="ion-ios-skipbackward-outline prev arrow1 icon-big" onclick="plusSlides(-1)"  id="btn-left"></a>
            </div>
            <div class="column">
                <a class="ion-ios-skipforward-outline next arrow2 icon-big" onclick="plusSlides(1)" id="btn-right"></a>
            </div>
        </div>
    </div>
</section>
    <!-- END Slideshow container -->
<!-- start footer -->
<footer class="down_footer">
    <div class="partners">
        <div id="jssor_1" class="footer_slides">
            <h4 class="text_sliders">Partnerzy:</h4>
            <!-- Loading Screen -->
            <div data-u="loading" class="loading">
                <img  src="resources/css/img/partners/spin.svg" />
            </div>
            <div data-u="slides" class="slider">
                <div>
                    <img id="img_slider" data-u="image" src="resources/css/img/partners/adidas.png" />
                </div>
                <div>
                    <img id="img_slider" data-u="image" src="resources/css/img/partners/CarolinaPanthers.png" />
                </div>
                <div>
                    <img id="img_slider" data-u="image" src="resources/css/img/partners/Denver-Broncos-Logo.png" />
                </div>
                <div>
                    <img id="img_slider" data-u="image" src="resources/css/img/partners/new-balance-logo.png" />
                </div>
                <div>
                    <img id="img_slider" data-u="image" src="resources/css/img/partners/nike.png" />
                </div>
                <div>
                    <img id="img_slider" data-u="image" src="resources/css/img/partners/Puma.png" />
                </div>
                <div>
                    <img id="img_slider" data-u="image" src="resources/css/img/partners/adidas.png" />
                </div>
                <div>
                    <img id="img_slider" data-u="image" src="resources/css/img/partners/CarolinaPanthers.png" />
                </div>
                <div>
                    <img id="img_slider" data-u="image" src="resources/css/img/partners/Denver-Broncos-Logo.png" />
                </div>
                <div>
                    <img id="img_slider" data-u="image" src="resources/css/img/partners/nike.png" />
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