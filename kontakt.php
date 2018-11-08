<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
        <section class="contact">
            <div class="row">
                <!-- klasa powina byc ogolna -->
                <h4 class="text-oferta">Kontakt</h4>
                <hr/>
            </div>
            <div class="container">
                <div class="contact__header">
                    <img src="resources/css/img/logo_fenomeno_wroclaw.png">
                        <span class="logo__title">Fenomeno Wroclaw</span>
                    ul. nazwa 123/1<br />
                    wrocław 51-109<br />
                    tel. 213 123 532<br />
                    email: adres@domena.pl<br />
                </div>
                <div class="contact__map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2503.5834064413784!2d17.029909816096826!3d51.134591879575645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470fe9933eecb78d%3A0xb7fecab74d0ee746!2sUnnamed+Road%2C+50-001+Wroc%C5%82aw!5e0!3m2!1spl!2spl!4v1541541169100" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                <div class="contact__form">
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
            </div>
        </section>
    <?php echo $template_footer; ?>
</body>

</html>