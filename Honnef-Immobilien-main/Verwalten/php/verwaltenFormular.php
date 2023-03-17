<form class="for" action="./" method="post">
    <input type="text" id="name" name="name" value="<?php echo $_POST['name']; ?>" placeholder="Vor- und Nachname*">
    <?php echo $nameErrMessage ?>
    
    <input type="text" name="email" id="email" value="<?php echo $_POST['email']; ?>" placeholder="E-Mail Adresse*">
    <?php echo $emailErrMessage ?>

    <input type="text" name="phone" id="phone" value="<?php echo $_POST['phone']; ?>" placeholder="Telefonnummer">
    <?php echo $phoneErrMessage ?>

    <input type="text" name="streetHousenumber" id="streetHousenumber" value="<?php echo $_POST['streetHousenumber']; ?>" placeholder="Straße und Hausnummer*">
    <?php echo $streetHousenumberErrMessage ?>

    <input type="text" name="plzLocation" id="plzLocation" value="<?php echo $_POST['plzLocation']; ?>" placeholder="PLZ und Wohnort*">
    <?php echo $plzLocationErrMessage ?>

    <legend>Zur Vermietung steht:</legend>
    <input type="radio" name="rentalType" id="wohnung" value="Wohnung">
    <label for="wohnung">Wohnung</label><br>
    <input type="radio" name="rentalType" id="haus" value="Haus">
    <label for="haus">Haus</label><br>
    <input type="radio" name="rentalType" id="bueroPraxis"  value="Buero/Praxis">
    <label for="bueroPraxis">Büro/Praxis</label><br>
    <input type="radio" name="rentalType" id="gewerbe"  value="Gewerbe">
    <label for="gewerbe">Gewerbe</label><br>
    <input type="radio" name="rentalType" id="sonstiges" value="Sonstiges" checked>
    <label for="sonstiges">Sonstiges</label><br>
    <br>
    
    <textarea name="shortDescription" id="shortDescription" placeholder="Kurzbeschreibung des Mietobjektes (Lage, Zimmer, Fläche)*"><?php  echo $_POST['shortDescription']; ?></textarea>
    <?php echo $shortDescriptionErrMessage ?>
    <br>

    <input type="checkbox" id="privacyPolicyAccept" name="privacyPolicyAccept">
    <label for="privacyPolicyAccept">*Ich stimme zu, dass meine Angaben und Daten zur Beantwortung meiner Anfrage elektronisch erhoben und gespeichert werden. Die <a href="http://honnef.immo/Datenschutz/">Datenschutzbestimmungen</a> habe ich zur Kenntnis genommen.</label>
    <?php echo $privacyPolicyAcceptErrMessage ?>
    <br><br>
    
    <label>Diese Website ist durch reCAPTCHA geschützt und es gelten die  <a href="https://policies.google.com/privacy">Datenschutzbestimmungen</a> und <a href="https://policies.google.com/terms">Nutzungsbedingungen</a> von Google.</label>
    <br>
    
    <input type="hidden" name="token" id="token">
    <input type="submit" name="submit" value="Absenden">
    <br>
    <?php echo $reCaptchaErrMessage ?>
</form>
<script src="https://www.google.com/recaptcha/api.js?render=6LdQ66QdAAAAAPKdRdNuz4ZWmS0799wnQviemQbr"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LdQ66QdAAAAAPKdRdNuz4ZWmS0799wnQviemQbr', {action: 'homepage'}).then(function(token) {
            document.getElementById('token').value = token;
        });
    });
</script>