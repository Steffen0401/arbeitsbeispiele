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

    if (isset($_POST['submit'])) {
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
        
        //validate message
        if(!isset($_POST['message']) || empty($_POST['message'])) {
            $messageErrMessage = '<span>Bitte geben Sie Ihr Anliegen an</span>';
            $sendMail = false;
        }

        //validate privacy policy
        if(!isset($_POST['privacyPolicyAccept']) || empty($_POST['privacyPolicyAccept'])) {
            $privacyPolicyAcceptErrMessage = '<span class="checkbox">Bitte Akzeptieren Sie die Datenschutzbestimmungen</span>';
            $sendMail = false;
        }

        //send email
        if ($sendMail) {
            $header="From:".$_POST['email'];
            $email_get = "";
            $regarding = "Kontaktformular";
            $msg =  "Versendet am " . date('d.m.Y') . " um " . date('H:i') . "Uhr \n" .
                    "\n" .
                    "Kontakt:\n" .
                    "Name: " . $_POST['name'] . "\n" .
                    "Email: " . $_POST['email'] . "\n" .
                    "Tel.: " . $_POST['phone'] . "\n" .
                    "\n" .
                    "Nachricht:\n" .
                    $_POST['message'];

            if (mail($email_get, $regarding, $msg , $header)) {
                $fromSendResult = 'showAlertBg showSendFromAlert';
                $_POST = array();
            } else {
                $fromSendResult = 'showAlertBg showErrFormAlert';
            }
        }
    }
?>
