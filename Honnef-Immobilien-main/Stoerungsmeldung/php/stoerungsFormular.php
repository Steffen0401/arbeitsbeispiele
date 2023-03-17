<form action="./" method="post">
    <input type="text" name="name" id="name" value="<?php echo $_POST['name']; ?>" placeholder="Vor- und Nachname*">
    <?php echo $nameErrMessage ?>

    <input type="text" name="email" id="email" value="<?php echo $_POST['email']; ?>" placeholder="E-Mail Adresse*">
    <?php echo $emailErrMessage ?>

    <input type="text" name="phone" id="phone" value="<?php echo $_POST['phone']; ?>" placeholder="Telefonnummer">
    <?php echo $phoneErrMessage ?>

    <input type="text" name="streetHousenumber" id="streetHousenumber" value="<?php echo $_POST['streetHousenumber']; ?>" placeholder="Straße und Hausnummer*">
    <?php echo $streetHousenumberErrMessage ?>

    <input type="text" name="plzLocation" id="plzLocation" value="<?php echo $_POST['plzLocation']; ?>" placeholder="PLZ und Wohnort*">
    <?php echo $plzLocationErrMessage ?>

    <textarea name="damageDescription" id="damageDescription" placeholder="Beschreiben Sie Ihren Schaden*"><?php echo $_POST['damageDescription']; ?></textarea>
    <?php echo $damageDescriptionErrMessage ?>
    <br>

    <label>Haben Sie schon Maßnahmen veranlasst?</label><br>
    <input type="radio" class="radio" id="no" name="measures" value="nein" <?php echo $noChecked ?>>
    <label for="no" class="radio">Nein</label>
    <input type="radio" class="radio" id="yes" name="measures" value="Ja" <?php echo $yesChecked ?>>
    <label for="yes" class="radio">Ja</label><br>

    <textarea class="hide" name="alreadyArranged" id="alreadyArranged" placeholder="Was haben Sie schon veranlasst?"><?php if(isset($_POST['alreadyArranged'])){ echo $_POST['alreadyArranged']; } ?></textarea>
    <?php echo $alreadyArrangedErrMessage ?>
    <br>

    <input type="checkbox" id="privacyPolicyAccept" name="privacyPolicyAccept">
    <label for="privacyPolicyAccept">*Ich stimme zu, dass meine Angaben und Daten zur Beantwortung meiner Anfrage elektronisch erhoben und gespeichert werden. Die <a href="<?php echo $url ?>/Datenschutz/">Datenschutzbestimmungen</a> habe ich zur Kenntnis genommen.</label>
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