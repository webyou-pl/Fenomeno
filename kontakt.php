<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
        <section class="contact">
            <div class="row">
                <!-- klasa powina byc ogolna -->
                <h4 class="text">Kontakt</h4>
                <hr/>
            </div>
            <div class="container">
                    <div class="contact__form">
                        <p class="contact__form--address">
                            <span class="logo__title">Fenomeno Wroclaw</span>
                            Wrocław 51-109<br />
                            Ul. nazwa 123/1<br />
                            Tel. 213 123 532<br />
                            Email: adres@domena.pl<br />
                        </p>
                        <form name="wyForm" action="none" onsubmit="return wyValidate()">
                            <p>Twój Email:</p> 
                            <input id="email" type="text" name="email" placeholder="Twój adres email">
                            <p id="eEmail" class="e--form"></p>
                            
                            <p>Treść Wiadomości:</p>
                            <textarea id="message" name="message" rows="5" cols="30" ></textarea>
                            <p id="eMessage" class="e--form"></p>
                            <input type="submit" value="WYŚLIJ" >
                        </form>
                    </div>
                    <div class="contact__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2503.6114029937175!2d17.03148589469973!3d51.13407552396919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x97bcba10fc9d97fc!2sLiceum+Og%C3%B3lnokszta%C5%82c%C4%85ce+nr+X+im!5e0!3m2!1spl!2spl!4v1541971639925" frameborder="0" style="border:0" allowfullscreen></iframe>
                        
                </div>
            </div>
        </section>
    <?php echo $template_footer; ?>
</body>

</html>