<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
<!-- Slideshow container -->
<section class="main">
    <div class="show">
        <video autoplay muted loop class="show__video">
            <source src="resources/video.mp4" type="video/mp4">
        </video>
        <div class="show__tekst">
            <span class="show__tekst--first-line">Z nami osiągniesz sukces</span>
            <span class="show__tekst--second-line">Dołącz już dziś</span>
        </div>
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
    
    <div id="popup_bg">
        <div id="popup_main_div">
            <div id="close_popup_div">
                <div id="popup_text">
                    <p>Udzielenie zgody na dowolne, nieodpłatne wykorzystanie treści.
Właściciel serwisu działającego pod domeną jakwylaczyccookie.pl udziela zgody na wykorzystanie tekstu wygenerowanego przez poniższy generator do dowolnych celów - zarówno komercyjnych jak i niekomercyjnych. Dopuszcza się dokonywanie dowolnych modyfikacji treści. Nie wymaga się zamieszczania jakiejkolwiek informacji zwrotnej o autorze tekstu.</p>
                </div>
                <div class="index__kontakt-button">
                    <a href="#" class="btn btn-full btn-position2" id="accept_button" onclick="ClosePopUp()">Zgadzam się</a>
                </div>
            </div>
        </div>
    </div>
    
    <?php echo $template_footer; ?>
</footer>
<!-- end footer -->
<script type="text/jscript" src="resources/js/index_js.js"></script>
</body>
</html>