<?php include_once('../head.phtml'); ?>
    <title>Vermieten</title>
<?php include_once('../header.phtml'); ?>
<?php include_once('php/sendFormular.php'); ?>

<main id="realEstate"  class="<?php echo $fromResult ?>">
<h1 class="pageHeadline">Immobilien/<span class="fontnull"> </span>Objekte/<span class="fontnull"> </span>Wohnungen mieten oder vermieten</h1>
    <div class="content">
        <p>Sie möchten eine Wohnung, ein Haus oder eine Gewerbeeinheit mieten oder vermieten, dann sind Sie hier genau richtig. Wir sehen uns als Berater im ganzheitlichen Sinne, d.h. wir holen Sie bei Ihren Vorstellungen ab und beraten Sie gemäß Ihrer Wünsche ganz individuell.</p>
        
        <p>Sie sind Eigentümer und möchten eine Wohnung oder ein Objekt vermieten, dann nehmen Sie gern <a href="<?php echo $url ?>/Kontakt/#formBox">Kontakt</a> zu uns auf</p>
    
        <h3>Möchten Sie etwas anmieten, so finden Sie folgend alle unsere aktuellen Angebote.</h3>
    </div>
    <div id="ivd24Container" class="content">
        <div id="moreInfo">
            <a>Mehr Informationen anfordern</a>
        </div>
        <div id="ivd24-container" data-id="1920"><i class="fas fa-circle-notch fa-4x fa-spin"></i></div>
        <script async src="https://www.ivd24immobilien.de/wp-content/themes/ivd24/js/objektlisten.js"></script>
        
        <div id="formBox" class="hide">
            <i class="fas fa-times"></i>
            <?php include_once('php/moreInformationFormular.php'); ?>
        </div>

        <div class="formAlert send">
        <i class="far fa-check-circle fa-7x"></i>
        <h3>Email würde erfolgreich versendet.</h3>
        <p>Vielen Dank. Wir haben Ihre Mitteilung erhalten. Ihr Anliegen wird in Kürze bearbeitet.</p>
        <a href="./">Ok</a>
    </div>

    <div class="formAlert err">
        <i class="fas fa-times fa-2x"></i>
        <i class="far fa-times-circle fa-7x"></i>
        <h3>Beim versender der Email ist etwas schief gelaufen.</h3>
        <p>Versuchen Sie es erneut oder treten Sie per  <a href="<?php echo $url ?>/Kontakt/">Telefon</a> oder <a href="<?php echo $url ?>/Kontakt/">E-Mail</a> in Kontakt.</p>
    </div>
    <div class="formAlertBg"></div>

    </div>
</main>
<?php include_once('../footer.phtml'); ?>