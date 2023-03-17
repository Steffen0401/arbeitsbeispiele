<form action="./" method="post">
<input type="text" id="name" name="name" value="<?php echo $_POST['name']; ?>" placeholder="Vor- und Nachname*">
    <?php echo $nameErrMessage ?>
    
    <input type="text" name="email" id="email" value="<?php echo $_POST['email']; ?>" placeholder="E-Mail Adresse*">
    <?php echo $emailErrMessage ?>

    <input type="text" name="phone" id="phone" value="<?php echo $_POST['phone'];?>" placeholder="Telefonnummer">
    <?php echo $phoneErrMessage ?>

    <input type="text" id="objectId" name="objectId" value="<?php echo $_POST['objectId']; ?>" placeholder="IVD Objektnummer (Entnehmen Sie diese Kennzahl aus dem Exposé)*">
    <?php echo $objectIdErrMessage; ?>
    <br>

    <input type="checkbox" id="recallAccept" name="recallAccept">
    <label>*Ich habe die <a href="../Widerrufsrecht">Widerrufserklärung</a> gelesen</label>  
    <?php echo $recallAcceptErrMessage; ?>
    <br>
    <input type="checkbox" id="privacyPolicyAccept" name="privacyPolicyAccept">
    <label>*Ich stimme zu, dass meine Angaben und Daten zur Beantwortung meiner Anfrage elektronisch erhoben und gespeichert werden. Die <a href="<?php echo $url ?>/Datenschutz/">Datenschutzbestimmungen</a> habe ich zur Kenntnis genommen.</label>
    <?php echo $dataAcceptErrMessage; ?>
    <br>
    <br>
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