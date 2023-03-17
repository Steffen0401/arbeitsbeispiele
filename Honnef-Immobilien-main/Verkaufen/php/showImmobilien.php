<main id="realEstate" class="<?php echo $fromResult ?>">
    <h1 class="pageHeadline">Immobilien/<span class="fontnull"> </span>Objekte/<span class="fontnull"> </span>Wohnungen kaufen oder verkaufen</h1>
    <div class="content">
        <p>Sie möchten eine Immobilie, eine Wohnung oder ein Grundstück kaufen oder verkaufen, dann sind Sie hier genau richtig. Wir sehen uns als Berater im ganzheitlichen Sinne, d.h. wir holen Sie bei Ihren Vorstellungen ab und beraten Sie gemäß Ihrer Wünsche ganz individuell. Wir stehen Ihnen von der Beratung, über die Wertermittlung, das Auswahlverfahren bis zur Formulierung Ihres Kaufvertrages eng zur Seite.</p>
        
        <p>Lesen sie <a href="<?php echo $url ?>/Verkaufen/?action=showLeistungenfuerVerkaeufer">hier</a>, warum es sich lohnt einen Makler beim Verkauf von Immobilien einzubeziehen und wie viel Zeit Sie damit für sich gewinnen.</p>
        
        <h3>Möchten Sie ein Objekt erwerben, so finden Sie folgend alle unsere aktuellen Angebote.</h3>
    </div>
    <div id="ivd24Container" class="content">
        <div id="moreInfo">
            <a>Mehr Informationen anfordern</a>
        </div>

        <div id="ivd24-container" data-id="1919"><i class="fas fa-circle-notch fa-4x fa-spin"></i></div>
        <script async src="https://www.ivd24immobilien.de/wp-content/themes/ivd24/js/objektlisten.js"></script>
    
        <div id="formBox" class="hide">
            <i class="fas fa-times"></i>
            <?php include_once('php/moreInformationFormular.php'); ?>
        </div>
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
</main>