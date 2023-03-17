<?php
    $sendMail = true;
    $fromResult = '';

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

        //validate object id
        if(!isset($_POST['objectId']) || empty($_POST['objectId'])) {
            $objectIdErrMessage = '<span>Bitte geben Sie die Objekt-ID an</span>';
            $sendMail = false;
        } else {
            $objectId = $_POST['objectId'];
        }

        //validate recallAccept
        if(!isset($_POST['recallAccept']) || empty($_POST['recallAccept'])) {
            $recallAcceptErrMessage = '<span class="checkbox">Bitte Akzeptieren Sie die Widerrufserklärung</span>';
            $sendMail = false;
        } else {
            $recallAccept = $_POST['privacyPolicyAccept'];
        }

        //validate privacyPolicyAccept
        if(!isset($_POST['privacyPolicyAccept']) || empty($_POST['privacyPolicyAccept'])) {
            $dataAcceptErrMessage = '<span class="checkbox">Bitte Akzeptieren Sie die Datenschutzbestimmungen</span>';
            $sendMail = false;
        } else {
            $dataAccept = $_POST['privacyPolicyAccept'];
        }

        //send email
        if ($sendMail) {
            $header="From:". $_POST['email'];
            $email_get = "linus.steinert@icloud.com";
            $regarding = "Mehr Informationen zu einer Immobilie anfordern";
            $msg = "Versendet am " . date('d.m.Y') . " um " . date('H:i') . "Uhr \n" .
                    "\n" . 
                    "Kontakt:\n" .
                    "Name: " . $_POST['name'] . "\n" .
                    "Mail: " . $_POST['email'] . "\n" .
                    "Tel: " . $_POST['phone'] . "\n" . 
                    "\n" .
                    "IVD Objektnummer: " . $_POST['objectId'];

            if (mail($email_get, $regarding, $msg , $header)) {
                $fromResult = 'showAlertBg showSendFromAlert';
                $_POST = array();

            } else {
                $fromResult = 'showAlertBg showErrFormAlert';
            }
        }
    }
?>
