<?php include_once('../head.phtml'); ?>
    <title>Störungsmeldung</title>
<?php include_once('../header.phtml'); ?>
<?php include_once('./php/sendFormular.php') ?>

<main id="propertyManagement" class="<?php echo $fromResult ?>">
    <h1 class="pageHeadline">Störungsmeldung</h1>
    <div id="formBox">
        <a href="javascript:history.back()"><i class="fas fa-angle-double-left"></i> zurück</a>
        <?php include_once('./php/stoerungsFormular.php') ?>
    </div>

    <div class="formAlert send">
        <i class="far fa-check-circle fa-7x"></i>
        <h3>Meldung wurde erfolgreich versendet</h3>
        <p>Vielen Dank. Wir haben Ihre Mitteilung erhalten. Ihr Anliegen wird in Kürze bearbeitet.</p>
        <a href="<?php echo $url ?>">Ok</a>
    </div>

    <div class="formAlert err">
        <i class="fas fa-times fa-2x"></i>
        <i class="far fa-times-circle fa-7x"></i>
        <h3>Beim versenden der Email ist etwas schief gelaufen.</h3>
        <p>Versuchen Sie es erneut oder treten Sie per  <a href="<?php echo $url ?>/Kontakt/">Telefon</a> oder <a href="<?php echo $url ?>/Kontakt/">E-Mail</a> in Kontakt.</p>
    </div>
    <div class="formAlertBg"></div>
</main>
<?php include_once('../footer.phtml'); ?>
