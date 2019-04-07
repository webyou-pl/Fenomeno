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
    <?php echo $template_footer; ?>
</footer>

<script type="text/jscript" src="resources/js/index_cookies_js.js"></script>
</body>
</html>