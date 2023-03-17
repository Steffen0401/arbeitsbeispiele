<?php include_once('../head.phtml'); ?>
    <title>Verwalten</title>
<?php include_once('../header.phtml'); ?>
<?php include_once('php/sendFormular.php'); ?>

<main id="propertyManagement" class="<?php echo $fromResult ?>">
    <h1 class="pageHeadline">Unsere Hausverwaltung stellt sich vor</h1>
    
    <div class="disturbance">
        <a class="slideOut" href="<?php echo $url ?>/Stoerungsmeldung/">Störungsmeldung senden</a>
        <div class="flag">
            <a href="<?php echo $url ?>/Stoerungsmeldung/">Störung melden!</a>
        </div>
    </div>

    
    <div class="pictureText">
        <img src="../img/verwaltenBild.jpg" alt="VerwaltenBild">
        <p>Wir sind ein ortsansässiges und engagiertes Team, welches die regionalen Besonderheiten gut kennt und sich dafür einsetzt für die Interessen der Eigentümer oder Mieter eine optimale Lösung zu finden.</p>
    </div>

    <div class="content">
        <h3>Wir sind Ihr Partner, wenn es um Lösungen von komplexen Aufgaben der Immobilien- und Hausverwaltung geht und bedienen dabei drei rechtlich unterschiedliche Bereiche:</h3>
    </div>
    
    <div class="descDiv">
        <div class="wegManagement descContent">
            <h2>WEG- und Mietverwaltung</h2>
            <p>Für Besitzer von Mietobjekten kümmern wir uns in der Mietverwaltung um Ihr Eigentum, sodass Sie so wenig Arbeit und so viel Rendite wie möglich damit haben. Bei der WEG-Verwaltung übernehmen wir organisiert, planvoll und nach entsprechenden Normen/Gesetzen handelnd die Umsetzung des Willens der Eigentümer, unter Berücksichtigung ökonomischer Regeln.</p>
        </div>
        <div class="row1 bg"></div>
        <div class="specialManagement descContent">
            <h2>Sondereigentumsverwaltung</h2>
            <p>Die Verwaltung einer Wohnung bzw. gewerblichen Einheit innerhalb einer Wohnungseigentümergemeinschaft wird als Sondereigentumsverwaltung bezeichnet. Eine vermietete Eigentumswohnung oder gewerbliche Einheit soll eine rentable Wertanlage sein.</p>
        </div>
        <div class="row2 bg"></div>
    </div>
    <div class="content">
        <p>Einen Teil unserer Objekte, die wir verwalten, sehen Sie unter <a href="<?php echo $url ?>/Vertrauen/?action=showReferenzObjekte">unsere Referenzobjekte</a>.</p>
    </div>

    <div id="formBox" class="content">
        <p>Sie sind Eigentümer/Vermieter und hätten gern ein Angebot für die Verwaltung Ihrer Immobilie. Füllen Sie bitte folgendes Formular aus und wir nehmen umgehend Kontakt zu Ihnen auf:</p>
        <?php include_once('php/verwaltenFormular.php'); ?>
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
<?php include_once('../footer.phtml'); ?>
