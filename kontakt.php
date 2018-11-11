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
                <div class="nazwa">
                    <div class="contact__form">
                        <p class="contact__form--address">
                            <span class="logo__title">Fenomeno Wroclaw</span>
                            Wrocław 51-109<br />
                            Ul. nazwa 123/1<br />
                            Tel. 213 123 532<br />
                            Email: adres@domena.pl<br />
                        </p>
                        <form action="none">
                            <p>Twój Email:</p> 
                            <input type="text" name="firstname" placeholder="Twój adres email">
                            <p class="e--form">e_email</p>
                            
                            <p>Treść Wiadomości:</p>
                            <textarea name="message" rows="10" cols="30" >  </textarea>
                            <p class="e--form">e_message</p>
                            <input type="submit" value="WYŚLIJ">
                        </form>
                    </div>
                    <div class="contact__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d882.607892082422!2d17.03120408378203!3d51.12796093735983!2m3!1f0!2f39.2014487898321!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x470fe99348801cd5%3A0x97bcba10fc9d97fc!2sLiceum+Og%C3%B3lnokszta%C5%82c%C4%85ce+nr+X+im!5e1!3m2!1spl!2spl!4v1541714862880"  frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        
                </div>
            </div>
        </section>
    <?php echo $template_footer; ?>
</body>

</html>