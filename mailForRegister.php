<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

if ($_POST && $_POST['first_name'] && $_POST['last_name'] && $_POST['email'] && $_POST['phone'] && $_POST['dob'] && $_POST['experience'] && $_POST['player_first_name'] && $_POST['player_last_name'] && $_POST['player_email'] && $_POST['player_phone']) {
    try {
        // ================= Send email to the admin =======================
        $mail = new PHPMailer(true);
        setupMailer($mail);  // user defined function

        $mail->addAddress('info@wildcatsbasket.se', 'Sales Team');
        $mail->addAddress('pradeep.codemegsoft@gmail.com', 'Sales Team');

        $mail->Subject  =   'Enquiry Form Mail for Register';
        $content        =   '<table border="1" cellpadding="0" align="center" cellspacing="0"
                            style="border: 1px solid #ccc; width: 100%; max-width: 650px; font-family: Arial, Helvetica, sans-serif;font-size: 15px; border-collapse: collapse;">
                            <tbody>
                                <tr>
                                    <th align="left"
                                        style="text-align: left;padding: 8px 10px;background: #eee;width: 150px;border: 1px solid #ccc;">
                                    </th>
                                    <td align="left" style="text-align: left;padding: 8px 10px;background: #fff;border: 1px solid #ccc;">
                                        <b>Request for Register</b>
                                    </td>
                                </tr>
                                <tr>
                                    <th align="left"
                                        style="text-align: left;padding: 8px 10px;background: #eee;width: 150px;border: 1px solid #ccc;">
                                        First Name</th>
                                    <td align="left" style="text-align: left;padding: 8px 10px;background: #fff;border: 1px solid #ccc;">
                                        ' . $_POST['first_name'] . '</td>
                                </tr>
                                <tr>
                                    <th align="left"
                                        style="text-align: left;padding: 8px 10px;background: #eee;width: 150px;border: 1px solid #ccc;">
                                        Last Name</th>
                                    <td align="left" style="text-align: left;padding: 8px 10px;background: #fff;border: 1px solid #ccc;">
                                        ' . $_POST['last_name'] . '</td>
                                </tr>
                                <tr>
                                    <th align="left"
                                        style="text-align: left;padding: 8px 10px;background: #eee;width: 150px;border: 1px solid #ccc;">
                                        Email</th>
                                    <td align="left" style="text-align: left;padding: 8px 10px;background: #fff;border: 1px solid #ccc;">
                                    ' . $_POST['email'] . '</td>
                                </tr>
                                <tr>
                                    <th align="left"
                                        style="text-align: left;padding: 8px 10px;background: #eee;width: 150px;border: 1px solid #ccc;">
                                        Phone</th>
                                    <td align="left" style="text-align: left;padding: 8px 10px;background: #fff;border: 1px solid #ccc;">
                                    ' . $_POST['phone'] . '</td>
                                </tr>
                                <tr>
                                    <th align="left" valign="top"
                                        style="text-align: left;padding: 8px 10px;background: #eee;width: 150px;border: 1px solid #ccc;">
                                        DOB</th>
                                    <td align="left" style="text-align: left;padding: 8px 10px;background: #fff;border: 1px solid #ccc;">
                                    ' . $_POST['dob'] . '</td>
                                </tr>
                                <tr>
                                    <th align="left" valign="top"
                                        style="text-align: left;padding: 8px 10px;background: #eee;width: 150px;border: 1px solid #ccc;">
                                        Experience</th>
                                    <td align="left" style="text-align: left;padding: 8px 10px;background: #fff;border: 1px solid #ccc;">
                                    ' . $_POST['experience'] . '</td>
                                </tr>
                                <tr>
                                    <th align="left" valign="top"
                                        style="text-align: left;padding: 8px 10px;background: #eee;width: 150px;border: 1px solid #ccc;">
                                        Player First Name</th>
                                    <td align="left" style="text-align: left;padding: 8px 10px;background: #fff;border: 1px solid #ccc;">
                                    ' . $_POST['player_first_name'] . '</td>
                                </tr>
                                <tr>
                                    <th align="left" valign="top"
                                        style="text-align: left;padding: 8px 10px;background: #eee;width: 150px;border: 1px solid #ccc;">
                                        Player Last Name</th>
                                    <td align="left" style="text-align: left;padding: 8px 10px;background: #fff;border: 1px solid #ccc;">
                                    ' . $_POST['player_last_name'] . '</td>
                                </tr>
                                <tr>
                                    <th align="left" valign="top"
                                        style="text-align: left;padding: 8px 10px;background: #eee;width: 150px;border: 1px solid #ccc;">
                                        Player Email</th>
                                    <td align="left" style="text-align: left;padding: 8px 10px;background: #fff;border: 1px solid #ccc;">
                                    ' . $_POST['player_email'] . '</td>
                                </tr>
                                <tr>
                                    <th align="left" valign="top"
                                        style="text-align: left;padding: 8px 10px;background: #eee;width: 150px;border: 1px solid #ccc;">
                                        Player Phone</th>
                                    <td align="left" style="text-align: left;padding: 8px 10px;background: #fff;border: 1px solid #ccc;">
                                    ' . $_POST['player_phone'] . '</td>
                                </tr>
                            </tbody>
                        </table>';

        $mail->Body     =   $content;

        $mail->send();


        // ================= Send email to the user =======================
        $mailUser = new PHPMailer(true);
        setupMailer($mailUser);  // user defined function

        $mailUser->addAddress($_POST['email'], 'Dear ');

        $mailUser->Subject  =   'Enquiry Form Mail';
        $mailUser->Body     =   emailContentForUser($_POST); // content for user defined below

        $mailUser->send();

        $message = 'Your request has been submitted successfully. We will contact you shortly.';

        echo json_encode(['status' => true, 'message' => $message]);
    } catch (Exception $e) {
        $message =  "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";

        echo json_encode(['status' => false, 'message' => $message]);
    }
} else {
    echo json_encode(['status' => false, 'message' => 'Fields are required.']);
}


function setupMailer($mailer)
{
    $mailer->isSMTP();
    $mailer->Host = 'send.one.com';
    $mailer->SMTPAuth = true;
    $mailer->Username = 'info@wildcatsbasket.se';
    $mailer->Password = 'wcb2024';
    $mailer->SMTPSecure = 'ssl'; // Use 'tls' or 'ssl'
    $mailer->Port = 465; // Adjust port accordingly

    // Email content
    $mailer->isHTML(true);

    // Sender and recipient settings
    $mailer->setFrom('info@wildcatsbasket.se', 'Westcoast Wildcats Team');
}

function emailContentForUser($formData)
{
    return
        '<html>
            <head>
                <title>Westcoast Wildcats</title>
            </head>
            <body>
                <div id="wrapper" dir="ltr" style="background-color: #fff;padding: 70px 0 70px 0;width: 100%;padding-top: 0px;padding-bottom: 0px;-webkit-text-size-adjust: none;margin: 0 auto;">
                    <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
                        <tbody>
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="template_container" style="background-color: #fff;overflow: hidden;border-style: solid;max-width: 660px;border-top-width: 5px;border-bottom-width: 5px;border-color: #c4270a;border-radius: 0px;border-right: 0px solid #fff;border-left: 0px solid #fff;box-shadow: 0 1px 20px 5px rgba(0,0,0,0.1);width: 100%;min-width: 320px;">
                                        <tbody>
                                            <tr>
                                                <td align="center" valign="top">
                                                    <div id="template_header_image_container">
                                                        <div id="template_header_image" style="max-width: 700px; width: 100%; min-width: 320px;">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_header_image_table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="center" valign="middle" style="text-align: center;padding-top: 15px;padding-bottom: 5px;">
                                                                            <p style="margin-bottom: 0; margin-top: 0;">
                                                                                <a href="#">
                                                                                    <img src="https://wildcatsbasket.se/assets/images/logo.png" alt="Westcoast Wildcats" width="170" style="border: none; display: inline; font-weight: bold; height: auto; outline: none; text-decoration: none; text-transform: capitalize; font-size: 14px; line-height: 25px; width: 100%; max-width: 70px;"> </a>
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top">
                                                    <!-- Body -->
                                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="template_body" style="max-width: 700px; width: 100%; min-width: 320px;">
                                                        <tbody>
                                                            <tr>
                                                                <td valign="top" id="body_content" style="background-color: #fff;padding-top: 20px;padding-bottom: 15px;">
                                                                    <!-- Content -->
                                                                    <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td valign="top" style="padding: 0px 48px 0; padding-left: 20px; padding-right: 20px;">
                                                                                    <div style="color: #000;text-align: left;font-size: 14px;line-height: 25px;font-family: Roboto, sans-serif;font-weight: 400;">
                                                                                        <p style="margin: 0; padding: 15px 0;">Hej ' . $formData['first_name'] . '  ' . $formData['last_name'] . ' , </p>
                                                                                        <p style="margin: 0;">Tack för att du visat intresse för att gå med i *Westcoast WildCats*!</p>
                                                                                        <div style="clear: both; height: 8px;"></div>
                                                                                        <p style="margin: 0;">Vi är glada att höra från dig och ser fram emot att du är intresserad av att bli en del av vårt lag. Vi kommer att granska alla intresseanmälningar och återkomma till dig snart med mer information.</p>
                                                                                        <div style="clear: both; height: 8px;"></div>
                                                                                        <p style="margin: 0;">Under tiden kan du se fram emot följande:</p>
                                                                                        <div style="clear: both; height: 4px;"></div>
                                                                                        <p style="margin: 0;">- <strong>Uttagningar:</strong> Vi planerar att hålla uttagningar senare i sommar.</p>
                                                                                        <div style="clear: both; height: 4px;"></div>
                                                                                        <p style="margin: 0;">- <strong>3x3 Cup:</strong> Vi siktar på att organisera en 3x3 basketturnering i juni, och vi kommer att dela mer information så snart vi är redo.</p>
                                                                                        <div style="clear: both; height: 8px;"></div>
                                                                                        <p style="margin: 0;">Om du har några frågor eller behöver vidare hjälp, tveka inte att kontakta oss på info@wildcatsbasket.se Vi finns här för att hjälpa till!</p>
                                                                                        <div style="clear: both; height: 8px;"></div>
                                                                                        <p style="margin: 0;">Tack igen för ditt intresse. Vi ser fram emot att potentiellt ha dig med oss på planen!</p>
                                                                                        <div style="clear: both; height: 20px;"></div>
                                                                                    </div>
                                                                                    <div style="color: #c4270a;text-align: left;font-size: 14px;line-height: 25px;font-family: Roboto, sans-serif;font-weight: 400;">
                                                                                        <p style="margin: 0;padding: 15px 0;padding-bottom: 0;">Bästa hälsningar,</p>
                                                                                        <p style="margin: 0;padding: 15px 0;padding-top: 0;">Westcoast WildCats Team</p>
                                                                                        <div style="clear: both; height: 1px;"></div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <!-- End Content -->
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- End Body -->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- End template container -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <body>
        <html>';
}