<form class="contactform" action="./" method="post">
    <input type="text" id="name" name="name" value="<?php echo $_POST['name']; ?>" placeholder="Vor- und Nachname*">
    <?php echo $nameErrMessage ?>
    
    <input type="text" name="email" id="email" value="<?php echo $_POST['email']; ?>" placeholder="E-Mail Adresse*">
    <?php echo $emailErrMessage ?>

    <input type="text" name="phone" id="phone" value="<?php echo $_POST['phone'];?>" placeholder="Telefonnummer">
    <?php echo $phoneErrMessage ?>

    <textarea id="message" name="message" placeholder="Ihre Anliegen*"><?php echo $_POST['message']; ?></textarea>
    <?php echo $messageErrMessage ?>
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