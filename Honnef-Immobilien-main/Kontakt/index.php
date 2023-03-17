<?php include_once('../head.phtml'); ?>
    <title>Kontakt</title>
<?php include_once('../header.phtml'); ?>
<?php include_once('./php/sendFormular.php'); ?>

<main id="contakt" class="<?php echo $fromSendResult ?>">
    <h1 class="pageHeadline">So erreichen Sie uns</h1>
    <div class="content">
        <h2>Lassen Sie uns wissen, wie wir Ihnen weiterhelfen können.</h2>
        <div class="flex">
            <table>
                <tr>
                    <td><i class="fas fa-envelope"></i></td>
                    <td>E-Mail</td>
                    <td><a href="mailto:info@honnef-immobilien.de">info@honnef-immobilien.de</a></td>
                </tr>
                <tr>
                    <td><i class="fas fa-phone"></i></td>
                    <td>Telefon</td>
                    <td><a href="tel:+493621300000">03621 300000</a></td>
                </tr>
                <tr>
                    <td><i class="fas fa-fax"></i></td>
                    <td>Fax</td>
                    <td>03621 300901</td>
                </tr>
                <tr>
                    <td><i class="fas fa-location-arrow"></i></td>
                    <td>Adresse</td>
                    <td>Arnoldiplatz 5 99867 Gotha</td>
                </tr>
            </table>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2513.570248623604!2d10.707037715615627!3d50.950160259113076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a47c06ef311867%3A0x445d60562ad157ce!2sHONNEF%20Immobilien!5e0!3m2!1sde!2sde!4v1634227863550!5m2!1sde!2sde" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <div class="contentBg">
        <div id="openingTimes" class="content">
            <h2>Öffnungszeiten</h2>
            <div class="flex">
                <div>
                    <h3>Vermieten & Verkaufen</h3>
                    <div class="timeDiv">
                        <ul>
                            <li>Montag</li>
                            <li>Dienstag</li>
                            <li>Mittwoch</li>
                            <li>Donnerstag</li>
                        </ul>
                        <div></div>
                        <p>09.00 Uhr - 17.00 Uhr</p>
                        <ul>
                            <li>Freitag 09.00 Uhr - 15.00 Uhr</li>
                            <li>oder nach Vereinbarung</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <h3>Verwaltung</h3>
                    <div class="timeDiv">
                        <ul>
                            <li>Montag</li>
                            <li>Dienstag</li>
                            <li>Mittwoch</li>
                            <li>Donnerstag</li>
                        </ul>
                        <div></div>
                        <p>09.00 Uhr - 12.00 Uhr | 14.00 Uhr - 17.00 Uhr</p>
                        <ul>
                            <li>Freitag 09.00 Uhr - 12.00 Uhr</li>
                            <li>oder nach Vereinbarung</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="formBox" class="content">
        <h2>Kontaktformular</h2>
        <?php include_once('./php/kontaktFormular.php'); ?>
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