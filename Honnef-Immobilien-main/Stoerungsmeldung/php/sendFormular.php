<?php
    $sendMail = true;
    $fromResult = '';
    $noChecked = checked;
    $yesChecked = '';

    // reCAPTCHER
    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['token'])) {
        $requestUrl='https://www.google.com/recaptcha/api/siteverify';
        $secret='6LdQ66QdAAAAAK5w8FcjJZSmN_vbXd92rXoCWsEf';
        $response=$_POST['token'];
        $request=file_get_contents($requestUrl.'?secret='.$secret.'&response='.$response);
        $request=json_decode($request);

        if ($request->success == true) {
            if ($request->score <= 0.7) {
                $reCaptchaErrMessage = '<span>Die Anfrage wurde aufgrund von Spamverdacht blockiert.</span>';
                $sendMail = false;
            }
        } else {
            $reCaptchaErrMessage = '<span>Beim reCAPTCHA ist etwas schiefgelaufen (verschen Sie es erneut)</span>';
            $sendMail = false;
        }
    }

    if (isset($_POST['submit']) || !empty($_POST['submit'])) {
        //validate name
        if(!isset($_POST['name']) || empty($_POST['name'])) {
            $nameErrMessage = '<span>Bitte geben Sie ihren Namen an</span>';
            $sendMail = false;
        }

        //validate email
        if(!isset($_POST['email']) || empty($_POST['email'])) {
            $emailErrMessage = '<span>Bitte geben Sie ihre E-Mail Adresse an</span>';
            $sendMail = false;
        } else {
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $emailErrMessage = '<span>Bitte geben Sie eine richtige E-Mail Adresse an</span>';
                $sendMail = false;
            }
        }

        //validate phone nummber
        if (isset($_POST['phone']) || !empty($_POST['phone'])) {
            if (preg_match("#^[a-zA-Z]+$#", $_POST['phone'])) {
                $phoneErrMessage = '<span>Bitte geben Sie eine richtige Telefonnummer an</span>';
                $sendMail = false;
            }
        }
        
        //validate street and housenumber
        if(!isset($_POST['streetHousenumber']) || empty($_POST['streetHousenumber'])) {
            $streetHousenumberErrMessage = '<span>Bitte geben Sie ihre Straße und Hausnummer an</span>';
            $sendMail = false;
        }

        //validate plz and location
        if(!isset($_POST['plzLocation']) || empty($_POST['plzLocation'])) {
            $plzLocationErrMessage = '<span>Bitte geben Sie ihre PLZ und Wohnort an</span>';
            $sendMail = false;
        }

        //validate damageDescription
        if(!isset($_POST['damageDescription']) || empty($_POST['damageDescription'])) {
            $damageDescriptionErrMessage = '<span>Bitte beschreiben Sie Ihren Schaden</span>';
            $sendMail = false;
        }

        //validate alreadyArranged
        if ($_POST['measures'] == 'Ja') {
            $noChecked = '';
            $yesChecked = checked;

            if(empty($_POST['alreadyArranged'])) {
                $alreadyArrangedErrMessage = '<span class="hide alreadyArrangedErrMessage">Bitte geben Sie an was veranlasst wurde</span>';
                $sendMail = false;
            }
        }

        //validate privacyPolicyAccept
        if(!isset($_POST['privacyPolicyAccept']) || empty($_POST['privacyPolicyAccept'])) {
            $privacyPolicyAcceptErrMessage = '<span class="checkbox">Bitte Akzeptieren Sie die Datenschutzbestimmungen</span>';
            $sendMail = false;
        }

        //send email
        if ($sendMail) {
            $email_from = $email;
            $header="From: $email_from";
            $email_get = "";
            $regarding = "Stoerungsmeldung";
            $msg =  "Versendet am " . date('d.m.Y') . " um " . date('H:i') . "Uhr \n" .
                    "\n" .
                    "Kontakt: \n" .
                    "Name: " . $_POST['name'] . "\n" .
                    "Email: " . $_POST['email'] . "\n" .
                    "Tel.: " . $_POST['phone'] . "\n" . 
                    "\n" .
                    "Adresse: \n" .
                    $_POST['streetHousenumber'] . "\n" .
                    $_POST['plzLocation'] . "\n" . 
                    "\n" .
                    "Beschreibung des Schadens:\n" .
                    $_POST['damageDescription']. "\n" .
                    "\n" . 
                    "Maßnahmen veranlasst: " . "(" . $_POST['measures'] . ") \n" .
                    $_POST['alreadyArranged'];



            if (mail($email_get, $regarding, $msg , $header)) {
                $fromResult = 'showAlertBg showSendFromAlert';
                $_POST = array();

            } else {
                $fromResult = 'showAlertBg showErrFormAlert';
            }
        }
    }
?>
